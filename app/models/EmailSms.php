<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class EmailSms extends Eloquent 
{
	
	protected $fillable = [
							'user_id',
							'phone_message',
							'phone',
							'phone_status',
							'email',
							'email_status',
							'email_message'
						];
	
	protected $table = 'email_sms_notification';




}


















?>