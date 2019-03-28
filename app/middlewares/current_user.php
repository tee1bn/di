<?php
@session_start();

// use Illuminate\Database\Eloquent\Model as Eloquent;

class current_user extends controller
{
	

	public function __construct(){

	}
	
	
	public function must_have_verified_email()
	{
		$setting = SiteSettings::site_settings();

		if (($setting['email_verification'] == 1) && ($this->auth()->email_verification != 1)) {

			Redirect::to('verify/email');
		}

		return $this;

	}

		public function must_have_verified_phone()
	{
		$setting = SiteSettings::site_settings();

		if (($setting['phone_verification'] == 1) && ($this->auth()->phone_verification != 1)) {

			Redirect::to('verify/phone');
		}

		return $this;

	}
	
	


	public function mustbe_loggedin(){

		if($this->auth()){

		return $this;

		}else{

		Redirect::to('login');
		}

	}







}


















?>