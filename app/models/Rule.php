<?php


use Illuminate\Database\Eloquent\Model as Eloquent;

class Rule extends Eloquent 
{
	
		protected $fillable = [
							'capital',
							'chunk_withdrawal',
							'per_x_days',
							'for_x_time'
							];
	
	protected $table = 'rule';

	



}


















?>