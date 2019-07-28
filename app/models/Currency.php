<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class Currency extends Eloquent 
{
	
	protected $fillable = [ 'name',	'html_code', 'available'];
	
	protected $table = 'currencies';



	public function available_currencies()
	{
		return self::where('available', 1);
	}



}


















?>