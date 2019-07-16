<?php
// error_reporting(E_ERROR | E_PARSE);


/**



*/
class AutoMatchingController extends controller
{




	public function __construct(){

		$this->settings = SiteSettings::site_settings();

		if ($this->settings['put_on_automatic_matching'] == 1) {

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
	

	public function update_growing_worth_of_matured_phs(){
		$growing_phs =   PH::growing_phs();

		echo "<pre>";

	 	 $percent= $this->settings['withdrawable_growing_ph'] * 0.01;
	 	 $percent_roi= $this->settings['percent_roi'] * 0.01;
	 	 $maturity_days= $this->settings['ph_maturity_in_days'] ;

		$fraction_of_maturity_days =  intval($percent * $percent_roi * $maturity_days);


			print_r($growing_phs->toArray());

		foreach ($growing_phs as $ph) {

				$growing_worth = $percent * ($ph->worth_after_maturity - $ph->amount);
				$growth_date = new DateTime($ph->matures_at);
			 	$maturity = $maturity_days;
			 	$growth_date_array =[];


			do{

			 	$g_date =  $growth_date->modify("+$fraction_of_maturity_days days")->format("Y-m-d H:i:s");	
				$growth_date_array[$g_date] = $growing_worth; 
				$maturity = $maturity - $fraction_of_maturity_days; 
			}while($maturity > 0);


		}

		print_r($growth_date_array);

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