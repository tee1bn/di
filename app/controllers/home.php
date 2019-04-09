<?php


/**
 * this class is the default controller of our application,
 * 
*/
class home extends controller
{


	public function __construct(){

	}



	public function test2()
	{
		$match = Match::first();
		$ph = $match->ph;
		echo $ph->matched->sum('gh_amount');
		// echo $this->buildView('emails/gh_notification', compact('match'));
		echo User::find(1)->has_letter_of_happiness_to_write();

	}


	public function send_message()
	{

		if (Input::exists() || true) {
			$this->validator()->check(Input::all() , array(

		
			'name' =>[

				'required'=> true,
				'min'=> 3,
				'max'=> 42,
					],
			'email' =>[

						'required'=> true,
						'email'=> true,
						'max'=> 52,
							],

			'subject' =>[
						'min'=> 7,
							],


			'message' =>[

						'required'=> true,
						'min'=> 5,
							],
		));
		
		if($this->validator->passed()){

					$settings = SiteSettings::site_settings();

					$to = $settings['contact_email'];

					$phone = $_POST['subject'];
					$from = "$name, $email ";
					$message = "$from - $phone ".$_POST['message'];


					/*// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					
					// More headers
					$headers .= 'From: <'.$_POST["email"].'>' . "\r\n";
					// $headers .= 'Cc: myboss@example.com' . "\r\n";*/
					$mailer = new Mailer();
					$response = $mailer->sendMail ($to,'New Message',$message);


					if ($response == true) {
					 	Session::putFlash('success', '<div id="sendmessage" style="display: block;">Your message has been sent. Thank you!</div>');
					}else{
					 	Session::putFlash('danger', '<div id="errormessage" style="display: block;">Could not send message. Please try again </div> ');


					}


					 }else{

					 	
					 	Session::putFlash('danger', '<div id="errormessage" style="display: block;">Could not send message. Please try again </div> ');
						print_r($this->validator->errors());


					 }
	}


		Redirect::back();
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
			'contact_email' => 'dove@gmail.com', //
			'google_re_captcha_site_key' => '6LeJqJwUAAAAAPADFRZZUG79bMw8O_4kdEr6dJ6t', //
			'google_re_captcha_secret_key' => '6LeJqJwUAAAAADgkLuF_W3etxOJItrkTWaCRGIH-', //
		];


		print_r(json_encode($site_settings));
	
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

		/*$domain = Config::domain();
		echo <<<EOL


		<img style="width:100%; height:100%;" src="$domain/template/default/assets/images/background/coming-soon.jpg">;
EOL;*/
		$this->view('guest/index');
	}




}























?>