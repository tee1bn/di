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





	public function ideology()
	{
		
		$this->view('guest/ideology');
	}


	public function how_it_works()
	{
		
		$this->view('guest/how_it_works');
	}



	public function faqs()
	{
		
		$this->view('guest/faqs');
	}


	public function contact()
	{
		
		$this->view('guest/contact');
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