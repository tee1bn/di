<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class Currency extends Eloquent 
{
	
	protected $fillable = [ 'name',	'html_code', 'available','settings'];
	
	protected $table = 'currencies';



	public function available_currencies()
	{
		return self::where('available', 1);
	}




	public function getsettingsAttribute($value)
    {
        return json_decode($value ,true);
    }

}


















?>