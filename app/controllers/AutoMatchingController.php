<?php
// error_reporting(E_ERROR | E_PARSE);


/**



*/
class AutoMatchingController extends controller
{




	public function __construct(){

		$settings = SiteSettings::site_settings();

		if ($settings['put_on_automatic_matching'] == 1) {

			// $this->match_ghs_and_phs();
		}

		$this->resolve_all_expired_match();
	}


	public function match_ghs_and_phs()
	{

		$valid_phs  =  PH::fetch_all_valid_unfufilled_phs()->pluck('id')->toArray();
		$valid_ghs  =  GH::fetch_all_valid_unfufilled_ghs()->pluck('id')->toArray();

			
		Match::match_ghs_and_phs($valid_ghs, $valid_phs);

	}
	












	public function put_matured_phs_on_matured_ph_table(){

		foreach (MaturedPhs::all(['ph_id']) as $matured_ph_id) {

			$matured_ph_ids[] = $matured_ph_id->ph_id;

		 } 

		$days_for_maturity = $this->system_settings->maturity_in_days;

	 	$date_for_maturity =  date("Y-m-d H:i:s", strtotime("-$days_for_maturity days") ); 



	  	$matured_phs = PH::where('fufilled_at','!=', null )
						->whereNotIn('id',  $matured_ph_ids)
						->where('payout_left',  0)
						->where('fufilled_at', '<=', $date_for_maturity)
						->get();

		foreach ($matured_phs as $matured_ph) {


			$created_matured_ph = 	MaturedPhs::create([
										'ph_id' => $matured_ph->id,
										'user_id' => $matured_ph->user_id,
										'worth' => $matured_ph->worth_after_maturity,
									]);

			$new_matured_phs[] = $created_matured_ph->id;
		}	
	}









	public function resolve_all_expired_match()
	{
	 //delete match and block ph user

		$expired_matches = Match::expired_matches()->get();

		foreach ($expired_matches as $match) {

			if ( ($match->payment_proof == '')) {
				$match->delete_match();
				 $match->ph->user->block_user();
			}
		}
	}










}
















?>