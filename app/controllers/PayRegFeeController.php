<?php


/**
 * this class is the default controller of our application,
 * 
*/
class PayRegFeeController extends controller
{

	public function __construct()
	{
			if (! $this->admin()) {

			$this->middleware('current_user')
				->mustbe_loggedin();
		}



	}


	public function upload_registration_payment_proof()
	{

			$payin = Payouts::find(Input::get('payin_id'));
			$payin->upload_payment_proof($_FILES['payment_proof']);
			Session::putFlash('success','Proof Uploaded Successfully!. Awaiting Admin Approval');

			Redirect::back();


	}



	public function index()
	{
		// Session::putFlash('warning',"You Must Pay the Registration Fee to keep Using the System");
		
		$this->view('auth/pay_registration_fee');
	}




}























?>