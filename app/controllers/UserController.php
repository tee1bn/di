<?php


/**
 * this class is the default controller of our application,
 * 
*/
class UserController extends controller
{


	public function __construct(){

		if (! $this->admin()) {

			$this->middleware('current_user')
				->mustbe_loggedin()
				->must_have_verified_phone()
				->must_have_verified_email()
				->must_have_no_letter_of_happiness_to_write();
		}

		
	}







	public function notifications($notification_id = 'all')
	{
		switch ($notification_id) {
			case 'all':
			$notifications = Notifications::all_notifications($this->auth()->id);

				break;
			
			default:
			

			$notifications = Notifications::where('user_id', $this->auth()->id)->where('id', $notification_id)->first();

			Notifications::mark_as_seen([$notifications->id]);


			if ($notifications == null) {
				Session::putFlash("danger", "Invalid Request");
				Redirect::back();
			}



			if ($notifications->DefaultUrl != $notifications->UsefulUrl) {

				Redirect::to($notifications->UsefulUrl);
			}



				break;
		}


		$this->view('auth/notifications', compact('notifications'));
	}


	public function create_gh_request()
	{

			Input::exists();
 			$gh_request =	GH::create_gh_request($this->auth()->id , Input::get('amount')); 
 			Redirect::back();
	}

	public function create_ph_request()
	{
			Input::exists();

 			$ph_request =	PH::create_ph( $this->auth()->id,  Input::get('amount')); 
 			Redirect::back();
	}


	public function reports()
	{
			$this->view('auth/report');
	}



	public function confirm_gh_match($match_id=null, $gh_id=null)
	{

		 $match = Match::where('id', $match_id)->where('gh_id', $gh_id)->first();
		 $gh = GH::where('id', $gh_id)->where('user_id', $this->auth()->id)->first();

		if (($match == null)  || ($gh == null) ) {
			Session::putFlash('danger','Invalid Request.');
			Redirect::back();
		}

		$match->complete_match();
		Session::putFlash('success', 'Payment confirmed successfully');

			Redirect::back();
	}





	public function ph_matches($ph_id)
	{
		$ph = PH::where('id', $ph_id)->where('user_id', $this->auth()->id)->first();

		if ($ph==null) {
			Redirect::back();
		}

		$this->view('auth/ph_matches', compact('ph'));
	}


	public function gh_matches($gh_id)
	{
		$gh = GH::where('id', $gh_id)->where('user_id', $this->auth()->id)->first();

		if ($gh==null) {
			Redirect::back();
		}



		$this->view('auth/gh_matches', compact('gh'));
	}


	public function ph()
	{
			$this->view('auth/ph');
	}



	public function gh()
	{
			$this->view('auth/gh');
	}


	public function make_withdrawal_request()
	{

		$min_withdrawal = json_decode(MlmSetting::where('rank_criteria', 'min_withrawal')->first()->settings, true);
		$amount = $_POST['amount'];


		if ($amount < $min_withdrawal) {
			Session::putFlash('info',"Sorry, Minimum Withdrawal is  R$min_withdrawal. ");
			Redirect::back();
		}

		LevelIncomeReport::create_withdrawal_request($this->auth()->id, $amount);

		Redirect::back();

	}




	public function withdrawals()
	{
		$this->view('auth/withdrawal-history');

	}



 	public function update_testimonial()
    {

    	echo "<pre>";
    	$testimony_id = Input::get('testimony_id');
     	$testimony = Testimonials::find($testimony_id);

    	$attester =  $this->auth()->lastname.' '. $this->auth()->firstname;


    	$testimony->update([
    						 'attester' =>$attester,
							  'user_id'	 => $this->auth()->id, 
							  'content'  =>Input::get('testimony'),
							  'approval_status' => 0 
							]);


    	Session::putFlash('success','Letter of Happiness updated successfully. Awaiting approval');

    	Redirect::back();
    }



	 public function create_testimonial()
    {
    	if (Input::exists() || true) {

	    	Testimonials::create([
	    						'attester' => $this->auth()->lastname.' '. $this->auth()->firstname,
								  'user_id'	 => $this->auth()->id, 
								  'content'  =>Input::get('testimony')]);

	    	Session::putFlash('success','Testimony created successfully. awaiting approval');

    	}
    	Redirect::back();
    }



	public function edit_testimony($testimony_id =null)
	{
		if (($testimony_id != null)  ) {
		$testimony = Testimonials::find($testimony_id);
			if (($testimony != null) && ($testimony->user_id == $this->auth()->id)) {

						$this->view('auth/edit-testimony', ['testimony'=>$testimony ]);
						return;
			}else{
				// Session::putFlash('','Invalid Request');
				Redirect::to('user/write_testimony');
			}

		}

	}



	public function view_testimony()
	{
		$this->view('auth/view-testimony');
	}



	public function write_testimony()
	{
		$this->view('auth/write-testimony');
	}




	public function news()
	{
		$this->view('auth/news');
	}


	public function upgrade()
	{
			$this->auth()->create_upgrade();
			Session::putFlash('','You must pay up upgrade fee to keep using the system');


			Redirect::to("user/payouts");
	}



	public function profile()
	{
		$this->view('auth/profile');
	}

	

	public function earnings($from=null, $to=null)
	{
		$query =  LevelIncomeReport::where('status','Credit')->where('owner_user_id', $this->auth()->id)->latest();
		if (($from != null) && ($to != null)) {
			$query =  $query->whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to);
		}


		$earnings = $query->get();
		$earnings_total = $query->sum('amount_earned');
		$this->view('auth/earnings', [
											'earnings'=>$earnings,
											'earnings_total'=>$earnings_total,
											]);
	}


	public function upload_ph_payment_proof()
	{
		$directory  = 'uploads/images/payment_proofs';

			$handle = new Upload($_FILES['payment_proof']);
			$match = Match::find(Input::get('match_id'));

                //if it is image, generate thumbnail
                if (explode('/', $handle->file_src_mime)[0] == 'image') {

			$handle->Process($directory);
	 		$original_file  = $directory.'/'.$handle->file_dst_name;

		(new Upload($match->payment_proof))->clean();
			$match->update(['payment_proof' => $original_file]);


			Session::putFlash('success','Proof Uploaded Successfully!');
			Redirect::back();

	}

	}





	public function support()
	{
		$this->view('auth/support');

	}





	public function view_ticket($ticket_id){

	 	$support_ticket 		 = SupportTicket::find($ticket_id); 

		$this->view('auth/support-messages', [
					'support_ticket'			=> $support_ticket 
									]);  


	}



	public function index()
	{
		$settings = SiteSettings::site_settings();
		$this->view('auth/dashboard', compact('settings'));
	}


	public function accounts()
	{
		$this->view('auth/accounts');

	}


	public function dashboard()
	{


		$settings = SiteSettings::site_settings();
		$this->view('auth/dashboard', compact('settings'));
	}

/*	public function broadcast()
	{
		$this->view('auth/broadcast');

	}
*/
	public function mavro()
	{
		$this->view('auth/mavro');

	}








}























?>