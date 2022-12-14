<?php 

      ini_set('max_execution_time', 300);

	require 'class/Image.class.php';

	$imgObj 	= new Imageclass(); 

      $source_path = 'image-source.json';
      $sources =  json_decode(file_get_contents($source_path), true); 

	foreach($sources as $index => $sourceArray){
		foreach ($sourceArray as $key => $source) {
			$fileParts = pathinfo($source); 
			$image = $imgObj->grabImage($source, 'storage/'.$fileParts['basename'] , $fileParts['basename'], $index);
                  echo "<img src='".$image."'>" . "<br>";
		}
	}
?>