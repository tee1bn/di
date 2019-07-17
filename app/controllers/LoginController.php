<?php
@session_start();
/**



*/
class LoginController extends controller
{

	public function __construct(){
	      // print_r($_SESSION);
	}




	public function adminLogindfghjkioiuy3hj8()
	{
		
	/*if($this->auth() ){
		Redirect::to('admin-dashboard');
	}*/
	$this->view('admin/login', []);

	}



	// authenticateing admnistrators
	public function authenticateAdmin()
	{

	if(/*Input::exists('admin_login')*/ true){


		$trial = Admin::where('email', Input::get('user'))->first();

		if ($trial == null) {

			$trial = Admin::where('username', Input::get('user'))->first();
		}


		$email = $trial->email;





	$admin = Admin::where('email', $email)->first();
	$password = Input::get('password') ;
 	$hash = $admin->password;
			if(password_verify($password, $hash)){



			Session::put('administrator', $admin->id);

			echo $this->admin();

			Session::putFlash('success',"Welcome Admin $admin->firstname");
			Redirect::to('admin-dashboard');

}else{
			Session::putFlash('danger','Invalid Credentials');
			$this->validator()->addError('credentials' , "<i class='fa fa-exclamation-triangle'></i> Invalid Credentials.");

			Redirect::to(''.Config::admin_url());
}




}




	}


	
	public function index()
	{
	
	if($this->auth()){
 			Redirect::to("user");
	}
	$this->view('auth/login', []);

	}







 

	/**
	 * this function handles user authentication
	 * @return instance of eloquent object of the authenticated User model
	 */
	public function authenticate()
	{
echo "<pre>";

		if(/*Input::exists("user_login")  */ true){
// 			print_r(Input::all());

		 	$settings = SiteSettings::site_settings();
		 	
		 	
			$post_data =  [
							'secret'=> $settings['google_re_captcha_secret_key'],
							'response'=> $_POST['g-recaptcha-response'],
						];
    

			$response = $this->make_post("https://www.google.com/recaptcha/api/siteverify", $post_data);


			$csrf =  (json_decode($response, true));
			
			    
		
			if(($csrf['success'] != 1) || ($csrf['hostname'] != $_SERVER['HTTP_HOST'])){
			    Session::putFlash('warning', "Please solve the captcha");
			    // Redirect::back();
			}


			$trial = User::where('username', Input::get('user'))->first();
			
			if ($trial == null) {

				$trial = User::where('email', Input::get('user'))->first();
			}



			$username = $trial->username;
		 	$result   = $this->authenticate_with($username , Input::get('password') );



		if ($result) {

				Session::putFlash('success',"Welcome ".$result->firstname);


			}else{

			$this->validator()->addError('user_login' , "<i class='fa fa-exclamation-triangle'></i> Invalid Credentials Or You are Blocked.");


				}


			}

print_r($this->validator()->errors()
);


		Redirect::to("login");

}



	public function logout($user=''){

		if($user == 'admin'){

					session_destroy();
					Redirect::to('login/adminLogin');
	
		}else{

			unset($_SESSION[$this->auth_user()]);
		}



		Redirect::to('login');

	
	}






}























?>