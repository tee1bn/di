<?php


use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class PH extends Eloquent 
{
	
	protected $fillable = [	
			'user_id',
			 'currency_id',
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


	public function currency()
	{
		return $this->belongsTo('Currency', 'currency_id');
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

		$settings = Currency::find($_POST['currency_id'])->settings;
		$downpayment =  $settings['percent_down_payment'] * 0.01 * $this->amount ;

		$available_ghs = GH::find_ghs_for_downpayment($downpayment, $_POST['currency_id']);

		$gh  = $available_ghs[0];


		if ($gh ==null) {
			return;
		}

		 Match::create_match($this->id, $downpayment, $downpayment, $gh['id']);

	}



	public static function last_ph($user_id)
	{
		$last_ph =	self::where('user_id', $user_id)
					->where('fufilled_at', '!=', null)
					->where('payout_left', 0)
					->latest()->first();

		return $last_ph;
	}




	public function create_ph($user_id , $amount)
	{
		$settings = Currency::find($_POST['currency_id'])->settings;


		//ensure no of pending ph
		   $pending_ph =  PH::where('user_id', $user_id)->where('fufilled_at', null)->count();

		   if ($pending_ph >= $settings['max_no_of_running_ph']) {
		   	 Session::putFlash('danger', "Maximum number of running PH. Please Complete your PHs");
		   	return;
		   }






		$worth =  	($settings['percent_roi'] * 0.01 * $amount) + $amount;

		$last_ph_amount = (int) PH::last_ph($user_id)->amount;

		$min_from_last_ph = $settings['percent_of_last_ph'] *0.01 * $last_ph_amount;

		$validator = new Validator;

		$maturity_days = $settings['ph_maturity_in_days'];

		$matures_at = new DateTime();
	 	$matures_at->modify("+$maturity_days days")->format("Y-m-d H:i:s");



		$validator->check(Input::all() , array(

				'amount' =>[
								'required'=> true,
								'numeric'=> true,
								'step'		=> $settings['ph_steps'],
								'min_value'=> max($settings['minimum_ph'], $min_from_last_ph),
								'max_value'=> $settings['maximum_ph'],
							],

			));





		if ($validator->passed()) {




				DB::beginTransaction();

				try {
					

				$ph	 =	PH::create([
								'user_id'		=> $user_id,
								'amount'		=> $amount,
								'currency_id'	=> $_POST['currency_id'],
								'payout_left'	=> $amount,
								'worth_after_maturity'	=> $worth,
								'matures_at'	=> $matures_at,
							]); 


 		 		//create downpayment match here
 		 		$ph->create_downpayment();
 		 		DB::commit();
 		 		Session::putFlash('success', "PH Request Successful. Check for Match. ");
				return $ph;

				} catch (Exception $e) {
 		 		DB::rollback();
 		 		print_r($e->getMessage());
					
				}


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

		$comment = 'Referral Bonus';
		LevelIncomeReport::credit_user($upline['id'], $bonus, $comment , $this->user->id);

	}


	public function fufill_ph()
	{
		$settings = Currency::find($this->currency_id)->settings;
		$maturity_days = $settings['ph_maturity_in_days'];
		$now = date("Y-m-d H:i:s");
		$matures_at = new DateTime();
	 	$matures_at->modify("+$maturity_days days")->format("Y-m-d H:i:s");

	 	$downpayment = $settings['percent_down_payment'] * 0.01 * $this->amount;
	 	$payed_out = $this->amount  - $this->payout_left;
	 	//fufil recommittment if paid atleast downpayment
	 	//,ark pending GH has recomiited
	 	if ($payed_out >= $downpayment) {


	 		$user = $this->user;
		 	$gh_non_recommited =	GH::whereDate('created_at', '<', $this->created_at)
							 		   ->where('user_id', $user->id)
							 		   ->where('currency_id', $this->currency_id)
							 		   ->where('fufilled_recommittment', null)
							 		   ->first();


			if ($gh_non_recommited != null) {

				$gh_non_recommited->update(['fufilled_recommittment'=>  1]);
			}

	 	}




		if ($this->isFufilled() === true) {

			$this->update(['fufilled_at'=> $now/* ,'matures_at'=> $matures_at*/]);
		 	$bonus = $settings['percent_referral_bonus_on_ph'] * 0.01 * $this->amount;

			//give referral bonus if first PH
			$first_ph = self::where('user_id', $this->user_id)->oldest()->first();
			if ($first_ph->id == $this->id) {
				$this->give_upline_referral_bonus($bonus);
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
		
		if ($this->matures_at == null) {
			return 0;
		}

		if (strtotime($this->matures_at) < time()) {
			return 100;
		}



		 $now = time() -strtotime($this->fufilled_at ) ;
		 $time_difference =  abs(strtotime($this->matures_at) - strtotime($this->fufilled_at ));
		$maturity_growth = min(( $now / $time_difference), 1) * 100;
		return intval($maturity_growth);
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