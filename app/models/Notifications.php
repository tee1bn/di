<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class Notifications extends Eloquent 
{
	
	protected $fillable = [

				'user_id',
				'url',
				'heading',
				'message',
				'short_message',
				'broadcast_id',
				'admin_id',
				'type',
				'phone',
				'phone_message',
				'phone_status',
				'seen_at',
				'email',
				'email_status',
				'email_message',
	
				'dashboard_message',
			];
	
	protected $table = 'notifications';


/*

	public function create_notification($notification =null)
	{		

				$project_name = Config::domain();
				DB::beginTransaction();

				try {
					
					$new_notification=self::create([
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
*/




	public function send_email_notifications()
	{

		$pending_email_notification = self::where('email_status', null)->get()->take(5);
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

		$pending_sms_notification = self::where('phone_status', null)->get()->take(5);
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






	public static function create_notification($user_id, $url, $heading, $message, $short_message,$admin_id=null, $broadcast_id=null )
	{

			self::create([
						'user_id'	=> $user_id,
						'url'		=> $url,
						'heading'	=> $heading,
						'message'	=> $message,
						'short_message'	=> $short_message,
						'admin_id'	=> $admin_id,
						'broadcast_id'	=> $broadcast_id,
					]);


	}



	public static function mark_as_seen($ids)
	{
		self::whereIn('id', $ids)->update(['seen_at'=> date("Y-m-d H:i:s")]);
	}
	

	public function getUsefulUrlAttribute()
	{	
		$domain = Config::domain();
		return "$domain/{$this->url}/{$this->id}";
	}

	

	public function getDefaultUrlAttribute()
	{	
		$domain = Config::domain();
		return "$domain/user/notifications/{$this->id}";
	}


	public function seen_status()
	{
		if ($this->is_seen()) {

			return "<span class='label  label-success'>Read</span>";
		}


			return "<span class='label  label-danger'>Unread</span>";
	}

	public function is_seen()
	{
		return (bool) ($this->seen_at != null);
	}


	public static function all_notifications($user_id, $per_page=null, $page=1)
	{

			$query = self::where('user_id', $user_id)->orderBy('created_at', 'DESC');;

				if ($per_page!= null) {
				 	$skip = ($page - 1)* $per_page;

							$query->take($per_page)
							->offset($skip);
				}

		return $query->get();

	}


	public static function unseen_notifications($user_id, $take=null)
	{
		$query = self::where('user_id', $user_id)->where('seen_at', null)->orderBy('created_at', 'DESC');

			if ($take != null) {
				$query->take($take);
			}


		return $query->get();
	}



	public function admin()
	{
		return $this->belongsTo('Admin', 'admin_id');
	}



	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}




}


















?>