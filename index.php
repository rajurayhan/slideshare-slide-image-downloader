<?php 

    ini_set('max_execution_time', 300);

	require 'class/Image.class.php';
	$imgObj 	= new Imageclass();

    

	$sources = [
        'lecture_one' => [
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-1-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-2-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-3-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-4-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-5-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-6-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-7-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-8-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-9-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-10-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-11-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-12-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-13-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-14-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-15-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-16-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-17-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-18-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-19-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-20-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-21-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-22-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-23-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-24-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-25-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-26-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-27-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-28-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-29-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-30-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-31-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-32-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-33-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-34-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-35-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-36-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-37-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-38-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-39-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-40-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-41-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-42-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-43-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-44-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-45-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-46-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-47-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-48-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-49-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-50-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture1-180817175833/75/web-development-course-php-lecture-1-51-2048.jpg"
        ],

        "lectur_two" => [
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-1-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-2-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-3-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-4-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-5-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-6-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-7-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-8-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-9-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-10-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-11-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-12-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-13-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-14-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-15-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-16-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-17-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-18-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-19-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture2-180817175844/75/web-development-course-php-lecture-2-20-2048.jpg"
        ], 
        "lecture_three" => [
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-1-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-2-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-3-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-4-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-5-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-6-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-7-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-8-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-9-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-10-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-11-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-12-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture3-180817175850/75/web-development-course-php-lecture-3-13-2048.jpg"
        ], 
        "lecture_four" => [
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-1-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-2-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-3-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-4-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-5-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-6-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-7-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-8-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-9-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-10-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-11-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-12-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-13-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-14-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-15-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-16-2048.jpg",
            "https://image.slidesharecdn.com/learningphplecture4-180817175906/75/web-development-course-php-lecture-4-17-2048.jpg"
        ]
    ];

	foreach($sources as $index => $sourceArray){
		foreach ($sourceArray as $key => $source) {
			$fileParts = pathinfo($source);
			echo $index . "<br>";
			$image = $imgObj->grabImage($source, 'storage/'.$fileParts['basename'] , $fileParts['basename'], $index);
		}
	}
?>