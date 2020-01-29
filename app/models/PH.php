<?php


use Illuminate\Database\Eloquent\Model as Eloquent;
require_once "app/controllers/home.php";


class PH extends Eloquent 
{
	
	protected $fillable = [	
			'user_id',
			 'matured_ph_id',
			 'package_id',
			 'amount',
			 'payout_left',
			 'fufilled_at',
			 'matures_at',
			 'expired',
			 'worth_after_maturity'
			];
		
	protected $table = 'ph';


	public static function recent_phs($user_id)
	{
		return self::where('user_id', $user_id)->latest()->take(30)->get();

	}


	public function package()
	{
		return $this->belongsTo('PhPackage', 'package_id');
	}

	public static function delete_phs($phs_ids)
	{
		try {
			
			$numbers_deleted = self::whereIn('id',$phs_ids)->delete();
		} catch (Exception $e) {
			
		}

		return (int)$numbers_deleted;

	}


	public static function fetch_all_valid_unfufilled_phs()
	{

		return $phs= PH::whereNotIn('user_id', User::BlockedUsers()->pluck('id'))
		  			->where('payout_left', '!=', 0)
		  			->where('expired', '=', null)
		  			->where('fufilled_at', '=', null)
		  			->get();
	}




	public function create_downpayment()
	{	
		return;
		$settings = SiteSettings::site_settings();
		$downpayment =  $settings['percent_down_payment'] * 0.01 * $this->amount ;

		$available_ghs = GH::find_ghs_for_downpayment($downpayment);

		$gh  = $available_ghs[0];


		if ($gh ==null) {
			return;
		}

		 Match::create_match($this->id, $downpayment, $downpayment, $gh['id']);

	}



	public function create_ph($user_id , $amount, $package_id)
	{

		$package = PhPackage::find($package_id);

		$settings = SiteSettings::site_settings();

		$last_gh_amount = (int) GH::last_gh($user_id)->amount;

		$min_from_last_gh = $settings['percent_of_last_gh'] *0.01 * $last_gh_amount;

		$validator = new Validator;



		if ($validator->passed()) {
				$ph	 =	PH::create([
								'user_id'		=> $user_id,
								'amount'		=> $amount,
								'payout_left'	=> $amount,
								'worth_after_maturity'	=> $package->Worth,
								'matures_at'	=> null,
								'package_id'	=> $package_id,
							]); 

 		 		Session::putFlash('success', "Pledge Request Successful. Check for Match. ");

 				$settings = SiteSettings::site_settings();

 				$controller = new home;

				  	$email_message = $controller->buildView('emails/admin_ph_notification', compact('ph'));
				 	$gh_notification = Notifications::create([
							'user_id' => null,
							'phone_message' => "New PH #{$ph->id} of ($ph->amount) has been created  --$project_name",
							'phone'  => $ph->user->phone,
							'email'  => $settings['admin_email'],
							'email_message' => $email_message,
							'message'=>$email_message,
							'heading'=> "New PH",
							'url'=> "user/notifications",
							'short_message'=> "New PH #{$ph->id} has been created --$project_name"
				 	]);





 		 		//create downpayment match here
 		 		$ph->create_downpayment();

				return $ph;
			}


		return;

	}




	public function scopeCompleted($query)
	{
		return $query->where('fufilled_at','!=', null);
	}




	public function give_upline_referral_bonus($bonus)
	{	

		$upline = $this->user->referred_members_uplines(1)[1];

			if ($upline == null) {
				return;
			}

		Earning::give_bonus($upline['id'], $this->user->id, $bonus);

	}


	public function fufill_ph()
	{
		$settings = SiteSettings::site_settings();
		$now = date("Y-m-d H:i:s");
		
	 	$downpayment = $settings['percent_down_payment'] * 0.01 * $this->amount;
	 	$payed_out = $this->amount  - $this->payout_left;
	 	//fufil recommittment if paid atleast downpayment
	 	//,ark pending GH has recomiited
	 	if ($payed_out >= $downpayment) {

	 		$user = $this->user;
		 	$gh_non_recommited =	GH::whereDate('created_at', '<', $this->created_at)
							 		   ->where('user_id', $user->id)
							 		   ->where('fufilled_recommittment', null)
							 		   ->first();

			if ($gh_non_recommited != null) {

				$gh_non_recommited->update(['fufilled_recommittment'=>  1]);
			}

	 	}




		if ($this->isFufilled() === true) {

			$this->update(['fufilled_at'=> $now]);
		 	$bonus = $settings['percent_referral_bonus_on_ph'] * 0.01 * $this->amount;

			//give referral bonus if first PH
			$first_ph = self::where('user_id', $this->user_id)->oldest()->first();
			if ($first_ph->id == $this->id) {
				$this->give_upline_referral_bonus($bonus);
			}
			

			for ($i=1; $i <= $this->package->n; $i++) { 
				$days = $this->package->interval_in_days;
				$return = $this->package->Return;

				$now = 	$date =  date("Y-m-d H:i:s", strtotime("$now + $days day" )); // 2011-01-03
				$comment = "$i return on PH";
				$identifier = "$i#{$this->id}";

				//create earnings records
				Earning::createTransaction('credit',
										$this->user->id,
										null,
										$return,
										'completed',
										'ph',
										$comment ,
										$identifier, 
										$this->id, 
										null,
										$now
									);	


			}
		}

		return false;
	}



	public function matched()
	{
		return   $this->hasMany('Match' ,'ph_id');
	}



	public function maturedPhs()
	{
		return $this->hasOne('MaturedPhs' , 'ph_id');
	}




	public function user()
	{
		return $this->belongsTo('User' ,'user_id');
	}


	public function status()
	{



		if($this->expired !== null ){
				return '<span class="label label-sm label-danger">Expired</span>';
		}

		if($this->fufilled_at !== null ){
				return '<span class="label label-sm label-success">Completed</span>';
		}


		if((! $this->matched->isEmpty())  && ($this->fufilled_at === null)  ){

			return '<span class="label label-sm label-primary">Matched</span>';
		}



		if((! $this->matched->isEmpty())  && ($this->fufilled_at === null)  ){



			  if (  ($this->payout_left !== 0) && ($this->payout_left < $this->amount) ) {
			  return   "<span class='label label-sm  label-info'>Ongoing</span>";
			  }


			return '<span class="label label-sm label-primary">Matched</span>';
			
		}






		if(($this->matched->isEmpty()) && ($this->expired === null )){

					return '<span class="label label-sm label-warning">Processing</span>';
		}


		foreach ($this->matched as $match ) {
		
			////

		}







	}

	public function isExpired()
	{

		if($this->expired !== null){
			return $this;

		}else{

			return false;
		}


	}




	public function maturity_growth()
	{


		$worth = $this->package->Worth;


		$received =  Earning::scopeCompletedCreditOnUser($this->user_id, 'ph')->where('order_id', $this->id)->sum('amount');


		
		if ($received == 0) {
			return 0;
		}


		$maturity_growth = intval(min(( $received / $worth), 1) * 100);
		return compact('maturity_growth','received');
	}








	public function isMatured()
	{	
		
		 return ( time() > strtotime($this->matures_at ) );
	}



public function isFufilled()
{
	if ($this->payout_left  == 0){

		foreach ($this->matched as $match) {

			if( $match->status === 'completed'){

				$payouts[] = $match->ph_amount;
			}

		}

		if($this->amount == array_sum($payouts)){

			return true;
		}


}


	return false;

}













}














?>