<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

include 'app/controllers/home.php';

class Match extends Eloquent 
{
	
	protected $fillable = ['ph_id','ph_amount', 'gh_amount', 'gh_id','payment_proof','expires', 'status'];
	
	protected $table = 'pair';





	public function see_proof()
	{}




	public function expired_matches()
	{	
		$today = date("Y-m-d H:i:s");
		return Match::where('status', null)->whereDate('expires', '<', $today);

	}

	public function next_x_hours($currency_id = null)
	{

		if ($currency_id == null) {
				$currency_id = $_POST['currency_id'];
		}

			$settings = Currency::find($currency_id)->settings;

    	 $today = date('N');

		switch ($today) {
			case 5:
				$expiry_hour = $settings['friday_execution_hour'];
				break;
			
			case 6:
				$expiry_hour = $settings['saturday_match_execution_hour'];
				break;
			
			case 7:
				$expiry_hour = $settings['sunday_match_execution_hour'];
				break;
			
			default:
				$expiry_hour = $settings['default_match_execution_hour'];
				break;
		}


		$datetime = new DateTime();
		return 	$datetime->modify("+$expiry_hour hours")->format("Y-m-d H:i:s");
	}


	public function match_ghs_and_phs(array $ghs_ids,  array $phs_ids)
	{
		$valid_ghs = GH::whereIn('id', $ghs_ids)->get();
		$valid_phs = PH::whereIn('id', $phs_ids)->get();



			DB::beginTransaction();

				try {

						$i = 0;
						foreach ($valid_ghs as $GH) {

							foreach ($valid_phs as $PH ) {

								 $gh_payin = $GH->payin_left;
								 $ph_payout = $PH->payout_left;



									//ensure currency is thesame
									if ($PH->currency_id != $GH->currency_id) {
										continue;
									}




									//ensure user is not paired to himself
									if ($PH->user->id == $GH->user->id) {
										continue;
									}

									//ensure gh is not matched more than payinleft
							 		if($GH->payin_left <= 0 ){
										continue;
							 		}

									//ensure ph is not matched more than payoutleft
							 		if($PH->payout_left <= 0 ){
										continue;
							 		}


								if ( $gh_payin == $ph_payout) { // create match
								 		$new_match =	Match::create_match($PH->id, $ph_payout,$gh_payin, $GH->id);
								 		if ($new_match) {$i++;}
								}elseif ($gh_payin > $ph_payout) {

								  $new_match=Match::create_match($PH->id, $ph_payout, $ph_payout, $GH->id);
								 		if ($new_match) {$i++;}
								}elseif($gh_payin < $ph_payout){

								 	$new_match = Match::create_match($PH->id, $gh_payin,$gh_payin, $GH->id);
								 		if ($new_match) {$i++;}
								}
						 		// echo "string";
							}
						}


					DB::commit();
				} catch (\Exception $e) {
				    DB::rollback();
				    // something went wrong
				}

		return $i ;

	}



	public function create_match($ph_id, $ph_amount, $gh_amount, $gh_id)
	{

			 		$attached_ph = PH::find($ph_id);
					$attached_gh = GH::find($gh_id);

					//ensure currency is the same
					if ($attached_ph->currency_id != $attached_gh->currency_id) {
						return false;
					}


					//ensure user is not paired to himself
					if ($attached_ph->user->id == $attached_gh->user->id) {
						return false;
					}

					//ensure gh is not matched more than payinleft
			 		if($attached_gh->payin_left < $gh_amount ){
			 			return false;
			 		}

					//ensure ph is not matched more than payoutleft
			 		if($attached_ph->payout_left < $ph_amount ){
			 			return false;
			 		}

					$expiry_hour = self::next_x_hours($attached_ph->currency_id);

			 DB::beginTransaction();



			 try {
			 	

		 	$match  = 	Match::create([
				 				'ph_id' 	=> $ph_id,
				 				'ph_amount' => $ph_amount,
				 				'gh_amount' => $gh_amount,
				 				'gh_id' 	=> $gh_id,
				 				'expires' 	=> $expiry_hour,
				 			]);



		 			$controller = new home();
				  	$email_message = $controller->buildView('emails/gh_notification', compact('match'));

				  	$project_name = Config::project_name();

				 $gh_notification=Notifications::create([
							'user_id' => $attached_gh->user->id,
							'phone_message' => "Your GH #{$attached_gh->id} has been matched --$project_name",
							'phone'  => $attached_gh->user->phone,
							'email'  => $attached_gh->user->email,
							'email_message' => $email_message,
							'message'=>$email_message,
							'heading'=> "GH Matched",
							'url'=> "user/notifications",
							'short_message'=> "Your GH #{$attached_gh->id} has been matched --$project_name"
				 	]);



				 $email_message = $controller->buildView('emails/ph_notification', compact('match'));

				$ph_notification=Notifications::create([
							'user_id' => $attached_ph->user->id,
							'phone_message' => "Your PH #{$attached_ph->id} has been matched --$project_name",
							'phone'  => $attached_ph->user->phone,
							'email'  => $attached_ph->user->email,
							'email_message' => $email_message,
							'message'=>$email_message,
							'heading'=> "PH Matched",
							'url'=> "user/notifications",
							'short_message'=> "Your PH #{$attached_ph->id} has been matched --$project_name",
				 	]);

					

				 		$payout_left = $attached_ph->payout_left - $match->ph_amount;
				 		$attached_ph->update(['payout_left' => $payout_left]);

				 		$payin_left = $attached_gh->payin_left - $match->gh_amount;
				 		$attached_gh->update(['payin_left' => $payin_left]);



				 		DB::commit();

				 		return true;


				} catch (Exception $e) {
				 		DB::rollback();
			 	print_r($e->getMessage());
			 }


				 		die();

			}


	public function delete_match()
	{
		if ($this->is_complete()) {
			return false;
		}

			$payoutleft = $this->ph->payout_left + $this->ph_amount;
			$this->ph->update(['payout_left'=> $payoutleft]);

			$payinleft = $this->gh->payin_left + $this->gh_amount;
			$this->gh->update(['payin_left'=> $payinleft]);


			$this->delete();

			return true;
	}


	public function complete_match()
	{
		DB::beginTransaction();
		try {

			$this->update(['status'=> 'completed']);


			//fufill PH and GH if Fufiled
			$this->ph->fufill_ph();
			$this->gh->fufill_gh();
			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
		}

	}


	public function is_complete()
	{
		return ($this->status == 'completed');
	}



	public function ph()
	{
		return $this->belongsTo('PH' , 'ph_id' );
	}



	public function gh()
	{
		return $this->belongsTo('GH' , 'gh_id' );
	}



	public function status()
	{

		if(($this->status ===  null) && ($this->is_expired() !== true)){

			return '<span class="label label-sm label-warning">Pending</span>';
		}elseif ($this->status ==  'completed') {

			return '<span class="label label-sm label-success">Completed</span>';
		}elseif ($this->is_expired() === true) {
			return '<span class="label label-sm label-danger">Expired</span>';
		}

	}




	public  function secs_to_expire()
	{

		$expiry = strtotime($this->expires );
		$now = strtotime(date("Y-m-d H:i:s"));
		$secs_to_expire = ($expiry - $now);
		return $secs_to_expire;
	
	}


	public function is_expired()
	{

		$today = strtotime(date("Y-m-d H:i:s"));
		$expiry_date = strtotime($this->expires );
		$expired = ($today > $expiry_date);
		if (($this->status != 'Approved') && ($expired) && ($this->proof == '')) {
			return true;
		}

		return false;
	}








protected function checkExpiry($hours_of_execution)
{
	$now = time();

 	$date_created = strtotime($this->created_at);

	$diff = (($now - $date_created)/3600);



	 	if ($diff > $hours_of_execution) {
	 		
	 		return true;

	 	}else{

	 		return false;

	 	}






}

}















?>