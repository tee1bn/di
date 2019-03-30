<?php


/**
 * this class is the default controller of our application,
 * 
*/
class home extends controller
{


	public function __construct(){

	}


	public function test11($value='')
	{
		echo "<pre>";

		print_r(GH::valid_unfufilled_ghs()[2]);

	}

	public function test()
	{
		echo "<pre>";

		$site_settings = [
			'percent_roi' => 50, //
			'ph_maturity_in_days' => 14,//


			'minimum_ph' => 2000, //
			'maximum_ph' => 4000,//
			'ph_steps' => 1000,//


			
			'minimum_gh' => 100, //
			'maximum_gh' => 4000,//
			'gh_steps' => 1000,//


			'email_verification' => 1,
			'phone_verification' => 1,
			'bank_verification' => 0,
			'friday_execution_hour' => 96,//
			'saturday_match_execution_hour' => 72,//
			'sunday_match_execution_hour' => 50,//
			'default_match_execution_hour' => 48,//


			'percent_referral_bonus_on_ph' => 50, //
			'match_sms_notification' => 0,
			'match_email_notification' => 0,
			'is_letter_of_hapiness_compulsory' => 1,
			'percent_down_payment' => 25, //
			'telegram_group_link' => 'http://telegram.com', //
			'percent_of_last_gh' => 100, //
			'downpayments_ghs_preference' => 0, //
			'support_link' => 'http://googleforms.com', //
			'put_on_automatic_matching' => 0, //
		];


		print_r(json_encode($site_settings));
		// print_r(SiteSettings::site_settings());


		 // print_r($uncompleted_ghs->get()->toArray());

		// print_r($this->auth()->available_balance());
	}

	/**
	 * [flash_notification for application notifications]
	 * @return [type] [description]
	 */
	public function flash_notification()
	{
		header("Content-type: application/json");

		if (isset($_SESSION['flash'])) {
		echo json_encode($_SESSION['flash']);
		}else{
			echo "[]";
		}


		unset($_SESSION['flash']);

	}





public function where_to_place_new_user_within_team_introduced_by($team_leader_id)
{
$mlm_width 		= 2;
$team_leader 	= User::find($team_leader_id);

		  	$team_leader_downline_level = 1;


		  do{
		  	$downline_at_level =  $team_leader->referred_members_downlines($team_leader_downline_level)[$team_leader_downline_level];
			  	if ((count($downline_at_level) < $mlm_width) && ($team_leader_downline_level==1)) {
			  		return $team_leader_id;
			  	}

		  		$downline_at_level_obj   = collect($downline_at_level);
				$max =  ($downline_at_level_obj->max('no_of_direct_line'));
				$min =  ($downline_at_level_obj->min('no_of_direct_line'));
		

		  	foreach ($downline_at_level as $key => $downline) { 
					if ($downline['no_of_direct_line'] == $min) {  //select user with list downline
						$referrer_user = ($downline);
						break;
					}
				}
						// print_r($referrer_user);

				if ($referrer_user['no_of_direct_line'] < $mlm_width) {
					return $referrer_user['id'];
				}

			$team_leader_downline_level++;
			
		  }while ($referrer_user != null);

}



public function where_to_place_new_user_introduced_by($introducer_user_id)
{


$mlm_width 		= 2;
$referrer_user 	= User::find($introducer_user_id);
$team_leader 	= User::find($introducer_user_id);
$preferred_leg 	= max(($referrer_user->preferred_leg_to_build - 1), 0 );
$preferred_leg 	= 0;
 
// during registratio
$i = 1;

do {
/*
echo "<br>iteration $i<br>";
echo "user $referrer_user->id<br>";*/
$value = $referrer_user->id ;
//check if referral still has room in direct line else consider next downline to put new user in referral weaker leg

/*echo*/ 
$referral_width =  count($referrer_direct_line = $referrer_user->referred_members_downlines(1)[1]);

if (($referral_width < $mlm_width) ) {//if actual referral still has space
/*echo*/ "<br>iteration $i notfull";
break;
}

$referrer_user = '';

// $referrer_user = User::find($referrer_direct_line[$preferred_leg]['id']);

// print_r($referrer_direct_line);
		$referrer_direct_line_obj   = collect($referrer_direct_line);
		echo $max =  ($referrer_direct_line_obj->max('no_of_direct_line'));
		 $min =  ($referrer_direct_line_obj->min('no_of_direct_line'));
		  $no_of_generations_at_level = $referrer_direct_line_obj->pluck(['no_of_direct_line']);
		
		  print_r($no_of_generations_at_level->toArray());
		  $expected_no_of_generations_at_level = pow($mlm_width, $i);
		  
		  // print_r($expected_no_of_generations_at_level);
				 // echo "<br>generational_levl $i <br>";





		if (($min < $mlm_width) || ($max < $mlm_width)) {  //recruit will be in this generation level
				foreach ($referrer_direct_line as $key => $downline) { 
					print_r($downline);
					if ($downline['no_of_direct_line'] == $min) {  //select user with list downline
						$referrer_user = User::find($downline['id']);
						break;
					}
				}

		}else{
			echo "string";
		}



// $referrer_user = User::find($referrer_direct_line[$preferred_leg]['id']);


$i++;
} while ($referrer_user != null);


/*
// echo $referrer_user.'<br>' ;
echo "user will be under $value <br><br>";

echo $referrer_user->id;
print_r($referrer_direct_line[$preferred_leg]);
*/



return $value ;





}





	public function who_we_are()
	{
		
		$this->view('guest/about');
	}


	public function index()
	{
		
		$this->view('guest/index');
	}




}























?>