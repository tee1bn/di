<?php


/**
 * this class is the default controller of our application,
 * 
*/
class AdminController extends controller
{


	public function __construct(){

		$this->middleware('administrator')->mustbe_loggedin();
	}


	public function write_testimony()
	{

		$this->view('admin/write-testimony');
	}

	public function edit_testimony($testimony_id =null)
	{
		if (($testimony_id != null)  ) {
		$testimony = Testimonials::find($testimony_id);
			if (($testimony != null) ) {

						$this->view('admin/edit-testimony', ['testimony'=>$testimony ]);
						return;
			}else{
				Redirect::to();
			}

		}

	}

	public function delete_ph($ph_id)
	{
		if (isset($_POST['to_be_deleted_ids'])) {

			$to_be_deleted_ids = $_POST['to_be_deleted_ids'];
		}else{

			$to_be_deleted_ids = [$ph_id];
		}

		$numbers_deleted =  PH::delete_phs($to_be_deleted_ids);
		Session::putFlash('success', "$numbers_deleted rows deleted");

		Redirect::back();
	}


	public function delete_gh($gh_id)
	{
		if (isset($_POST['to_be_deleted_ids'])) {

			$to_be_deleted_ids = $_POST['to_be_deleted_ids'];
		}else{

			$to_be_deleted_ids = [$gh_id];
		}

		$numbers_deleted =  GH::delete_ghs($to_be_deleted_ids);
		Session::putFlash('success', "$numbers_deleted rows deleted");

		Redirect::back();
	}



	public function suspending_admin($admin_id=null)
	{

		$admin = Admin::find($admin_id);
			if ($admin == null) {
					Redirect::back();
				}


		if ($admin->is_owner()) {
			Session::putFlash('danger', "Invalid Request");
			Redirect::back();
		}else{

			$admin->delete();
			Session::putFlash('success', "Deleted Succesfully");
		}
					Redirect::back();
	}



	public function create_admin()
	{

			if (Input::exists()) {

			}

			$this->validator()->check(Input::all() , array(

					'firstname' =>[

						'required'=> true,
						'min'=> 2,
						'max'=> 20,
							],
					'lastname' =>[

							'required'=> true,
							'min'=> 2,
							'max'=> 20,
								],

					'email' => [

									'required'=> true,
									'email'=> true,
									'unique'=> 'Admin'
								],

					'username' => [

									'required'=> true,

									'min'=> 3,
									// 'one_word'=> true,
									'no_special_character'=> true,
									'unique'=> 'Admin',
								],

					'phone' => [

									'required'=> true,
									'min'=> 9,
									'max'=> 14,
									'unique'=>'Admin'

								],

			));

			if($this->validator->passed()){
			 	$admin =  Admin::create([
			 				'firstname' => Input::get('firstname') ,
			 				'lastname' => Input::get('lastname') ,
			 				'email' => Input::get('email') ,
			 				'phone' => Input::get('phone') ,
			 				'username' => Input::get('username') ,
			 				
			 				]);
			 	if($admin){


			 		Session::putFlash('success', "Admin Created Succesfully.");
			 	}
		 	}else{


		 		Session::putFlash('info', Input::inputErrors());
			}



	}



	public function administrators()
	{

		$this->view('admin/administrators');
	}



	public function create_matches()
	{


		
		
		$matches = 	Match::match_ghs_and_phs($_POST['ghs'],  $_POST['phs'] );
		if ($matches > 0) {

			Session::putFlash('success', "$matches matches created");
		}else{

			Session::putFlash('danger', "Either Same User was selected or Something went wrong. <br>Please Try again.");

		}


		Redirect::back();
	}





	public function delete_match($match_id)
	{

		$match = Match::find($match_id);

		if ($match->delete_match()) {
			Session::putFlash('success', 'Match Deleted Successfully');
		}else{

			Session::putFlash('danger', "#$match_id Match is completed and cannot be deleted.");
		}
		



		Redirect::back();
		
	}





	public function confirm_gh_match($match_id=null, $gh_id=null)
	{

		 $match = Match::where('id', $match_id)->where('gh_id', $gh_id)->first();
		 $gh = GH::where('id', $gh_id)->first();

		if (($match == null)  || ($gh == null) ) {
			Session::putFlash('danger','Invalid Request.');
			Redirect::back();
		}

		$match->complete_match();

		Session::putFlash('success', 'Payment confirmed successfully');
		Redirect::back();
		

	}

	





	public function mavro()
	{

		$this->view('admin/mavro');
	}


	public function create_gh_request()
	{

			Input::exists();
 			$gh_request =	GH::create_gh_request_by_admin( Input::get('pioneer'), Input::get('amount')); 
 			Redirect::back();
	}


	public function accounts()
	{
		$this->view('admin/accounts');
	}


	public function profile($admin_id=null)
	{

		$admin  =  Admin::where('id', $admin_id)->first();
		if (($admin == null) || (($admin->is_owner() )  && (!$this->admin()->is_owner()))) {

			Session::putFlash('danger','unauthorised access');
			Redirect::back();
		}

		$this->view('admin/profile', compact('admin'));
	}



	public function manual_matches()
	{

		$valid_unfufilled_ghs = GH::fetch_all_valid_unfufilled_ghs() ;
		$valid_unfufilled_phs = PH::fetch_all_valid_unfufilled_phs() ;
		$this->view('admin/manual_matches', compact('valid_unfufilled_phs','valid_unfufilled_ghs'));
	}



	public function toggle_news($new_id)
	{

		$news = BroadCast::find($new_id);
		if ($news->status) {

		$update = $news->update(['status' => 0 ]);
		Session::putFlash('flash', 'News unpublished succesfully');


		}else{

		$update = $news->update(['status' => 1 ]);

		Session::putFlash('success', 'News published succesfully');

		}

		Redirect::back();
	}




	public function delete_news($new_id)
	{

		$news = BroadCast::find($new_id);
		if ($news != null) {

		$update = $news->delete();
		Session::putFlash('success', 'Deleted succesfully');


		}


	Redirect::back("admin/news");


	}



	public function create_news(){

		print_r(Input::all());
		BroadCast::create([
						'broadcast_message' => Input::get('news'),
						'admin_id' => $this->admin()->id
						]);
		Session::putFlash('success', 'News Created succesfully');

		Redirect::back();


	}



	public function broadcast()
	{
		$this->view('admin/broadcast');
	}


	public function matches()
	{

		$this->view('admin/matches');
	}

	
	public function ph_matches($ph_id)
	{
		$ph = PH::where('id', $ph_id)->first();

		if ($ph==null) {
			Redirect::back();
		}

		$this->view('admin/ph_matches', compact('ph'));
	}


	public function gh_matches($gh_id)
	{
		$gh = GH::where('id', $gh_id)->first();

		if ($gh==null) {
			Redirect::back();
		}



		$this->view('admin/gh_matches', compact('gh'));
	}



	public function gh()
	{

		$this->view('admin/gh');
	}


	public function ph()
	{

		$this->view('admin/ph');
	}


	public function viewSupportTicket($ticket_id){

		$support_ticket_messages = SupportTicket::find($ticket_id)->messages; 
		$support_ticket 		 = SupportTicket::find($ticket_id); 

		$this->view('admin/support-ticket-messages', [
					'support_ticket_messages'	=> $support_ticket_messages ,
					'support_ticket'			=> $support_ticket 
									]);  

	}
	


	 public function create_testimonial()
    {

    	if (Input::exists() || true) {

	    	Testimonials::create([
	    						'attester' => Input::get('attester'),
								  'content'  =>Input::get('testimony')]);

	    	Session::putFlash('success','Testimony created successfully. Awaiting approval');

    	}
    	Redirect::back();
    }





	public function testimonials()
	{
		$this->view('admin/testimonials');

	}

	public function approve_testimonial($testimonial_id)
	{

		$testimony = Testimonials::find($testimonial_id);
		if ($testimony->approval_status) {

		$update = $testimony->update(['approval_status' => 0 ]);
		Session::putFlash('success', 'Testimonial disapproved succesfully');


		}else{

		$update = $testimony->update(['approval_status' => 1 ]);

		Session::putFlash('success', 'Testimonial approved succesfully');

		}


	Redirect::back();


	}

	public function delete_testimonial($testimonial_id)
	{

		$testimony = Testimonials::find($testimonial_id);
		if ($testimony != null) {

		 $testimony->delete();
			Session::putFlash('success', 'Testimonial deleted succesfully');


		}


		Redirect::back();
	}


 	public function update_testimonial()
    {

    	echo "<pre>";
    	$testimony_id = Input::get('testimony_id');
     	$testimony = Testimonials::find($testimony_id);

    	$testimony->update([
    						 'attester' =>Input::get('attester'),
							  'content'  =>Input::get('testimony'),
							  'approval_status' => 0 
							]);


    	Session::putFlash('success','Letter of Happiness updated successfully. Awaiting approval');

    	Redirect::back();
    }



	public function support()
	{

		$support_tickets = SupportTicket::all();
			$this->view('admin/support', ['support_tickets' => $support_tickets]);  
	}

	public function users(){
		$this->view('admin/users');

	}



	public function testing()
	{
		$this->view('admin/sales');
	}	






	public function settings(){
		$this->view('admin/settings');
	}


	public function user_profile($user_id = null){

		if ($user_id==null) {
			Redirect::back();
		}


		$_SESSION[$this->auth_user()] = $user_id;

		$this->view('admin/accessing_user_profile');

		// $this->view('admin/profile', ['user'=>User::find($user_id)]);
	}



	public function suspending_user($user_id){


		if (User::find($user_id)->blocked_on) {

		$update = User::find($user_id)->update(['blocked_on' => null ]);
		Session::putFlash('success', 'Ban lifted succesfully');


		}else{

		$update = User::find($user_id)->update(['blocked_on' => date("Y-m-d")]);

		Session::putFlash('success', 'User Blocked succesfully');

		}


		if ($update) {	
		}else{
		Session::putFlash('flash', 'Could not Block this User');
		}


		Redirect::back();
	}





	public function toogle_pioneership($user_id){

		$user = User::find($user_id);

		if ($user->isnot_demo_user()) {

		$update = User::find($user_id)->update(['account_plan' => 'pioneer' ]);
		Session::putFlash('success', "{$user->username} is now a pioneer");


		}else{

		$update = $user->update(['account_plan' => null]);

		Session::putFlash('success', "{$user->username} is no longer a pioneer");

		}

		Redirect::back();
	}






	public function dashboard()
	{	
		$this->view('admin/dashboard');

	}




}























?>