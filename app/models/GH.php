<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class GH extends Eloquent 
{
	
	protected $fillable = [	
							'user_id',
							'fufilled_recommittment',
							'pioneered',
							'amount',
							'currency_id',
							'fufilled_at',
							'payin_left'
						];
		
	protected $table = 'gh';


	public function getrecipientAccountAttribute()
	{

		switch ($this->currency_id) {

			case 1://naira
					$account = <<<EOL

			       Name: <b> {$this->user->bank_account_name}</b><br>
			        Acct: <b>{$this->user->bank_account_number}</b><br>
			        Bank: <b>{$this->user->bank_name}</b><br>
EOL;			
			return $account;

				break;
			
			case 2:
				$account = <<<EOL
                       Wallet Address: <b> {$this->user->bitcoin_address}</b><br>
EOL;				

			return $account;


				break;
			
			default:
				# code...
				break;
		}


	}



	public function currency()
	{
		return $this->belongsTo('Currency', 'currency_id');
	}



	public function getGhRecommittmentStatusAttribute()
	{
		if ($this->fufilled_recommittment == 1) {

			return "<span class='badge badge-secondary'></span>";
		}else{

			return "<span class='badge badge-secondary'>awaiting recommittment</span>";
		}

	}


	public static function recent_ghs($user_id)
	{
		return self::where('user_id', $user_id)->latest()->take(30)->get();

	}



	public static function delete_ghs($ghs_ids)
	{
		try {
			
			$numbers_deleted = self::whereIn('id',$ghs_ids)->delete();
		} catch (Exception $e) {
			
		}

		return (int)$numbers_deleted;

	}


	public static function last_gh($user_id)
	{
		$last_gh =	GH::where('user_id', $user_id)
					->where('fufilled_at', '!=', null)
					->where('payin_left', 0)
					->latest()->first();

		return $last_gh;
	}




	public static function fetch_all_valid_unfufilled_ghs()
	{

		return   $ghs =  GH::whereNotIn('user_id', User::BlockedUsers()->pluck('id'))
		  			->where('payin_left', '!=', 0)
		  			// ->where('fufilled_recommittment', 1)
		  			->where('fufilled_at', null)
		  			->get();
	}








	public function valid_unfufilled_ghs($downpayment, $currency_id)
	{


		$blocked_users_ids = User::BlockedUsers()->pluck('id')->toArray();
		$pioneers_ids  =  User::Pioneers()->where('blocked_on',null)->pluck('id')->toArray();
		




		$pioneers_unfifilled_ghs =  GH::where('fufilled_at', null)
									->whereIn('user_id', $pioneers_ids)
									->where('currency_id', $currency_id)
									->where('payin_left', '>=', $downpayment)
									->where('fufilled_recommittment',  1)
									->get()
									->toArray();


		$regular_users_unfifilled_ghs_only =  GH::where('fufilled_at', null)
											->whereNotIn('user_id', $blocked_users_ids)
											->whereNotIn('user_id', $pioneers_ids)
											->where('currency_id', $currency_id)
											->where('payin_left', '>=', $downpayment)
											->where('fufilled_recommittment',  1)
											->get()
											->toArray();

		$all_unfufilled_ghs = array_merge($pioneers_unfifilled_ghs, $regular_users_unfifilled_ghs_only);
		

		
		$ghs =  [$pioneers_unfifilled_ghs , $regular_users_unfifilled_ghs_only , $all_unfufilled_ghs];

		return $ghs;
		
	

	}



	public static function find_ghs_for_downpayment($downpayment, $currency_id)
	{


		$ghs =  self::valid_unfufilled_ghs($downpayment, $currency_id);



		return $ghs[0];
		
	}




	public function scopeNotCompleted($query)
	{
		return $query->where('fufilled_at','=', null);
	}

	


	public function scopeCompleted($query)
	{
		return $query->where('fufilled_at','!=', null);
	}

	

	public function create_gh_request($user_id, $amount)
	{
		$currency_id = $_POST['currency_id'];

		$settings = Currency::find($_POST['currency_id'])->settings;

		$user = User::find($user_id);
		$balances = $user->matured_mavros_worth();


		if ($amount > $balances[$currency_id]['available_balance']) {
 		 		Session::putFlash('danger', "Invalid GH Request. ");
			return;
		}

		$validator = new Validator;


		$validator->check(Input::all() , array(

				'amount' =>[
								'required'=> true,
								'numeric'=> true,
								'step'		=> $settings['gh_steps'],
								'min_value'=> $settings['minimum_gh'],
								'max_value'=> $settings['maximum_gh'],
							],

			));


		if ($validator->passed()) {

			DB::beginTransaction();

			try {
				


				$gh	 =	GH::create([
								'user_id'		=> $user_id,
								'amount'		=> $amount,
								'payin_left'	=> $amount,
								'currency_id'	=> $_POST['currency_id'],
							]); 

				
				$notification = Notifications::create_notification(
					$user_id, $url, $heading, $message, $short_message,$admin_id=null, $broadcast_id=null 
				);



 		 		DB::commit();
 		 		Session::putFlash('success', "GH Request Successful. Check for Match. ");
				return $gh;
			} catch (Exception $e) {
				DB::rollback();
				print_r($e->getMessage());				
			}
		}

	
	}




	public function create_gh_request_by_admin($user_id, $amount)
	{

		$settings = Currency::find($_POST['currency_id'])->settings;

		$user = User::find($user_id);
		
		$validator = new Validator;


		$validator->check(Input::all() , array(

				'amount' =>[
								'required'=> true,
								'numeric'=> true,
								'step'		=> $settings['gh_steps'],
								'min_value'=> $settings['minimum_gh'],
								'max_value'=> $settings['maximum_gh'],
							],

			));


		if ($validator->passed()) {

				$gh	 =	GH::create([
								'user_id'		=> $user_id,
								'amount'		=> $amount,
								'payin_left'	=> $amount,
								'currency_id'	=> $_POST['currency_id'],
								'pioneered'	=> 1,
								'fufilled_recommittment'	=> 1
							]); 

 		 		Session::putFlash('success', "GH Request Simulated Successfully. ");

				return $gh;
		}

	
	}





	public function fufill_gh()
	{
		$now = date("Y-m-d H:i:s");

			if ($this->isFufilled() === true) {

				return	$this->update(['fufilled_at'=> $now]);
			}
		return false;		
	}





	public function matched()
	{
		return $this->hasMany('Match' ,'gh_id');
	}




	public function user()
	{
		return $this->belongsTo('User' ,'user_id');
	}









	public function status()
	{



if( count($this->matched ) != 0){
  $status = "<span class='label label-primary'>Matched</span>";





  if (  ($this->payin_left !== 0) && ($this->payin_left < $this->amount) ) {
  $status = "<span class='label label-info'>Ongoing</span>";
  }





          if($this->fufilled_at !==null){
     $status = "<span class='label label-success'>Completed</span>";
          }


}else{

    $status = "<span class='label label-warning'>Processing</span>";

}

return $status ;

	}




public function isFufilled()
{




	if ($this->payin_left  == 0){

		foreach ($this->matched as $match) {

			if( $match->status === 'completed'){

				$payins[] = $match->gh_amount;
			}

		}

		if($this->amount == array_sum($payins)){

			return true;
		}


}


	return false;

}











}














?>