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
		$this->send_email_notifications();
	}



	public function toggle (){
	     $super_admin = Admin::find(1);

	    if($super_admin->super_admin ==1){
	        echo 'unset';
	       echo $super_admin->update(['super_admin'=> null]);            
	    }else{
	        echo 'set';
	       echo $super_admin->update(['super_admin'=> 1]);            

	    }
	
	    echo $super_admin;
	}
	

	public function match_ghs_and_phs()
	{

		$valid_phs  =  PH::fetch_all_valid_unfufilled_phs()->pluck('id')->toArray();
		$valid_ghs  =  GH::fetch_all_valid_unfufilled_ghs()->pluck('id')->toArray();

			
		Match::match_ghs_and_phs($valid_ghs, $valid_phs);

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





	public function send_email_notifications()
	{

		if ($this->settings['email_notification'] != 1) {
			return;
		}


		$pending_email_notification = Notifications::where('email_status', null)->get()->take(5);
		$mailer  = new Mailer();
		$project_name = Config::project_name();
		$subject = "$project_name NOTIFICATION!!";

		foreach ($pending_email_notification as $note) {

			$body = $note->email_message;
			$to = $note->email;
			$recipient_name = "";

		 	if($mailer->sendMail($to, $subject, $body, $reply='', $recipient_name)){
		 		$note->update(['email_status'=> 1]);
		 	}else{
		 		continue;
		 	}
		}
	}









}
















?>