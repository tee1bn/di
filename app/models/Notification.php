<?php


use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class Notification extends Eloquent 
{
	
	protected $fillable = [
							'user_id',
							'phone_message',
							'phone',
							'phone_status',
							'email',
							'email_status',
							'email_message',
							'url',
							'dashboard_message',
							'seen_at',
							'admin_id',
							'type'
						];
	
	protected $table = 'notification';




	public function create_notification($notification =null)
	{		

				$project_name = Config::domain();
				DB::beginTransaction();

				try {
					
					$new_notification=Notification::create([
								'user_id' 		=> $notification['user_id'],
								'phone_message' => $notification['phone_message'],
								'phone'  		=> $notification['phone'],
								'email'  		=> $notification['email'],
								'email_message' => $notification['email_message'],
								'url'			=> $notification['url'],
								'dashboard_message' => $notification['dashboard_message'],
								'admin_id'  	=> $notification['admin_id'],
								'type'			=> $notification['type']
					 	]);

					DB::commit();
					return $new_notification;
				} catch (Exception $e) {
					DB::rollback();
					return false;
					
				}


	}





	public function send_email_notifications()
	{

		$pending_email_notification = Notification::where('email_status', null)->get()->take(5);
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

		$pending_sms_notification = Notification::where('phone_status', null)->get()->take(5);
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



}


















?>