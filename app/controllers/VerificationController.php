<?php


/**
 * this class is the default controller of our application,
 * 
*/
class VerificationController extends controller
{






	public function __construct(){

		if (! $this->admin()) {

			$this->middleware('current_user')
				->mustbe_loggedin();
		}

		
	}











	public function write_letter_of_happiness()
	{

		$this->view('auth/write-testimony');

	}



	public function phone()
	{

		$this->view('auth/verify_phone');

	}





	public function email()
	{

		$this->view('auth/verify_email');

	}




}























?>