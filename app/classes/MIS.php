<?php

/**
* This is where all miscellaneous operational functions is done
*/
class MIS 
{
	
	
	public function money_format($string)
	{
		return number_format("$string",2);		
	}


	public static function encode_for_url($string){
			return str_replace(' ', '-', $string);
	}


    public static function custom_mime_content_type($filename)
    {

    	if(function_exists('mime_content_type')&&$mode==0){ 
        $mimetype = mime_content_type($filename); 
        return $mimetype; 

		}elseif(function_exists('finfo_open')&&$mode==0){ 
		        $finfo = finfo_open(FILEINFO_MIME); 
		        $mimetype = finfo_file($finfo, $filename); 
		        finfo_close($finfo); 
		        return $mimetype; 
		}elseif(array_key_exists($ext, $mime_types)){ 
		        return $mime_types[$ext]; 
		}else { 
		        return 'application/octet-stream'; 
		} 


    }



        public static function use_google_recaptcha()
        {

        	    $settings = SiteSettings::site_settings();
        	    $key = $settings['google_re_captcha_site_key'];
        	    
        	    $recaptcha = <<<EOL
        	    <div class="g-recaptcha form-group" data-sitekey="$key">
        	    </div>
EOL;

        	    return $recaptcha;
        }


	public static function verify_google_captcha()
	{
			$domain =Config::domain();
			    return true;
			if (strpos($domain, '.') == false) {
			}

		 	$settings = SiteSettings::site_settings();		 	
			$post_data =  [
							'secret'=> $settings['google_re_captcha_secret_key'],
							'response'=> $_POST['g-recaptcha-response'],
						];
    			$response = self::make_post("https://www.google.com/recaptcha/api/siteverify", $post_data);


			$csrf =  (json_decode($response, true));
					
			if(($csrf['success'] != 1) || ($csrf['hostname'] != $_SERVER['HTTP_HOST'])){
			    Session::putFlash('warning', "Please solve the captcha");
			    Redirect::back();
			}

	}



    public static 	function random_string( $length = 6 ) {
		    $chars = "abcdefghijkmnpqrtwyz123456789";
		    $password = substr( str_shuffle( $chars ), 0, $length );
		    return $password;
	}


	public static function refine_multiple_files($files)
	{
		foreach ($files as $attribute => $attributes) {
			foreach ($attributes as $key => $value) {
				$refined_file[$key][$attribute] = $value;
			}

		}

		return $refined_file;
	}



	public static function make_post($url, $post_data, $header=[])
	{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_POST, 1);


        // In real life you should use something like:
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($post_data));
     
        if (count($header)>0) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        
        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);

      
        curl_close($ch);

        return $server_output;
    }


}