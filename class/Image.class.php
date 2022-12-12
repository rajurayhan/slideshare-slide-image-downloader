<?php 
	/**
	 * 
	 */
	// include composer autoload
	require_once __DIR__ . '/../vendor/autoload.php';

	use Intervention\Image\ImageManagerStatic as Image;
	class Imageclass
	{
		
		function __construct()
		{
			# code...
		}

		
		public function grabImage($image_url, $image_file, $file_name, $folder){
		    $fp = fopen ($image_file, 'w+');              // open file handle

		    $ch = curl_init($image_url);
		    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // enable if you want
		    curl_setopt($ch, CURLOPT_FILE, $fp);          // output to file
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 1000);      // some large value to allow curl to run for a long time
		    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 || Raju Image Downlaod');
		    // curl_setopt($ch, CURLOPT_VERBOSE, true);   // Enable this line to see debug prints
		    curl_exec($ch);

		    curl_close($ch);                              // closing curl handle
		    fclose($fp);                                  // closing file handle	

		    $name = $this->addWaterMark($image_file,  $file_name, $folder);

		    return $name;	
		}

		public function addWaterMark($imageFile,  $file_name, $folder)
		{
			$watermark 	= Image::make('storage/new_institute_logo.png'); 

			$img            = Image::make($imageFile);
            $img->insert($watermark, 'bottom-right',10,10);
			$path = 'storage/downloads/'.$folder;
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
			}
            $img->save($path.'/'.$file_name);

            unlink($imageFile);

			// echo "<img src='storage/water/".$name."'>";
			return $file_name;
		}
	}
?>