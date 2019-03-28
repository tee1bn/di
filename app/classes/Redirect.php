<?php



/**
* 
*/
class Redirect
{

	public static function to($location = null)
	{
	 $location = Config::domain()."/$location";

		if ($location) {
				if (is_numeric($location)) {
					
					switch ($location) {
						case '404':
							header('HTTP/1.0 404 page not found');
							break;
						
						default:
				
						break;
					}
				}



				



ob_end_clean();
				header('Location:'. $location);
				exit();
		}


	}


	
	public function back()
	{

		 $location = $_SERVER['HTTP_REFERER'];
			ob_end_clean();
				header('Location:'. $location);
				exit();

	}

	

}













