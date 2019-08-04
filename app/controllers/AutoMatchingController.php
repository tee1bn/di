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
		$this->update_growing_worth_of_matured_phs();

		$this->send_email_notifications();
	}


	public function send_email_notifications()
	{

		if ($this->settings['email_notification'] != 1) {
			return;
		}


		$pending_email_notification = EmailSms::where('email_status', null)->get()->take(5);
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




	public function send_sms_notifications()
	{


		$pending_sms_notification = EmailSms::where('phone_status', null)->get()->take(5);
		$mailer  = new Mailer();
		$project_name = Config::project_name();
		$subject = "$project_name NOTIFICATION!!";

		foreach ($pending_sms_notification as $note) {

		 	if($mailer->sendMail($to, $subject, $body, $reply='', $recipient_name)){
		 		$note->update(['email_status'=> 1]);
		 	}else{
		 		continue;
		 	}
		}
	}



	public function match_ghs_and_phs()
	{

		$valid_phs  =  PH::fetch_all_valid_unfufilled_phs()->pluck('id')->toArray();
		$valid_ghs  =  GH::fetch_all_valid_unfufilled_ghs()->pluck('id')->toArray();

			
		Match::match_ghs_and_phs($valid_ghs, $valid_phs);

	}
	

	public function update_growing_worth_of_matured_phs(){
		$growing_phs =   PH::growing_phs();

		echo "<pre>";
		print_r($growing_phs->toArray());


	 	$today = date("Y-m-d");

		foreach ($growing_phs as $ph) {

			$already_paid = LevelIncomeReport::where('ph_id', $ph->id)->get();
			$already_paid_sum = $already_paid->sum('amount_earned');


			$paid_dates = ($already_paid->pluck('ph_pay_date')->toArray());

			//ensure no double payment
			if ($already_paid_sum >= $ph->worth_after_maturity) {
				$ph->update(['roi_paid'=>1]);
				continue;
			}




			$scheduled_pay = $ph->SchedulePays;
			$scheduled_pay_dates = array_keys($scheduled_pay);



			$unpaid_dates = array_diff($scheduled_pay_dates, $paid_dates); //unpaid  dates

			print_r($unpaid_dates);


			foreach ($unpaid_dates as  $unpaid_date) {
				$now = time();
				$unpaid_time = strtotime($unpaid_date);



				if ($now >= $unpaid_time) {

					echo  $amount_earned = $scheduled_pay[$unpaid_date];



			try {
				

				$credit	=LevelIncomeReport::create([
										'owner_user_id'	=> $ph->user->id,
										'downline_id'	=> null,
										'amount_earned'	=> $amount_earned,
										'status'	=> 'Credit',
										'commission_type'	=> "Chunk ROI",
										'ph_id' => $ph->id,
										'ph_pay_date' => $unpaid_date
										]);



					//Schedule notification
				  	$email_message = $this->buildView('emails/roi_notification', compact('credit'));
				  	$project_name = Config::project_name();
				  	$currency = Config::currency();

					$gh_notification=EmailSms::create([
							'user_id' => $ph->user->id,
							'phone_message' => "Your Earned $currency $amount_earned from PH#{$ph->id}. --$project_name",
							'phone'  => $ph->user->phone,
							'email'  => $ph->user->email,
							'email_message' => $email_message
				 	]);



			} catch (Exception $e) {
				
			}



				}


			}
			



			break;
		}


	}



	public function resolve_all_expired_match()
	{
		
	 //delete match and block ph user

		$expired_matches = Match::expired_matches()->get();

		foreach ($expired_matches as $match) {
			
			//dobule check
			if (!$match->is_expired()) {
				continue;
			}

			echo $match;

			if ( ($match->payment_proof == '')) {
				$match->delete_match();
				 $match->ph->user->block_user();
			}
		}
	}










}
















?>