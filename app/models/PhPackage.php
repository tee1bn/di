<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class PhPackage extends Eloquent 
{
	
	protected $fillable = [
							'name',
							'price',
							'roi_percent',
							'n',
							'interval_in_days',
							'is_available'
							];
	
	protected $table = 'ph_packages';




	public function scopeAvailable($query)
	{
		return $query->where('is_available', 'on');
	}


	public function getReturnAttribute()
	{
		return $this->roi_percent * 0.01 * $this->price;
	}



	public function getWorthAttribute()
	{
		return ($this->roi_percent * 0.01 * $this->price) * $this->n;
	}





}