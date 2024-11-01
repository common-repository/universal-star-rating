<?php
/**
 * Print an image from template
 *
 * @author Chasil
 * @author Mike Wigge info@universal-star-rating.de
 *
 * @since 2.0
 * @version 1.0
 */

require_once 'functions/func.loadPNG.php';

header('Content-Type: image/png');

//set filters for input
$getFilters =
	array(
		"img" =>
			array(
				"filter"=>FILTER_SANITIZE_STRING,
				"flags"=>
					array(
						FILTER_FLAG_STRIP_LOW,
						FILTER_FLAG_STRIP_HIGH
					)
			),
		"max" =>
			array(
				"filter"=>FILTER_VALIDATE_INT,
				"options"=>
					array(
						"min_range"=>1
					)
			),
		"rat" =>
			array(
				"filter"=>FILTER_VALIDATE_FLOAT,
			),
		"px" =>
			array(
				"filter"=>FILTER_VALIDATE_INT,
				"options"=>
					array(
						"min_range"=>1
					)
			),
		"folder" =>
			array(
				"filter"=>FILTER_SANITIZE_STRING,
				"flags"=>
					array(
						FILTER_FLAG_STRIP_LOW,
						FILTER_FLAG_STRIP_HIGH
					)
			),
	);
$sanitizedGet = filter_input_array(INPUT_GET, $getFilters);

//read the needed information - if not set use defaults
if(isset($sanitizedGet['img'])){
	$imgName = $sanitizedGet['img'];
} else {
	$imgName = '01.png';
}
if(isset($sanitizedGet['max'])){
	$imgCount = $sanitizedGet['max'];
} else {
	$imgCount = 5;
}
if(isset($sanitizedGet['rat'])){
	$imgRating = $sanitizedGet['rat'];
} else {
	$imgRating = 0;
}
if(isset($sanitizedGet['px'])){
	$imgPX = $sanitizedGet['px'];
} else {
	$imgPX = 12;
}
if(isset($sanitizedGet['folder'])){
	$imgName = substr($imgName, 1);
	$usrFolder = '../../../' . $sanitizedGet['folder'];
} else {
	$usrFolder = '../images';
}

//define subfolder
if($imgPX<=20){
	$imgFolder=20;
} elseif($imgPX<=40) {
	$imgFolder=40;
} elseif($imgPX<=60) {
	$imgFolder=60;
} elseif($imgPX<=80) {
	$imgFolder=80;
} elseif($imgPX<=100) {
	$imgFolder=100;
} else {
	$imgFolder=189;
}

$imgTemp = LoadPNG($usrFolder . '/' . $imgFolder . '/' . $imgName);

//set x and y for temp images
$imgWidth = imagesx($imgTemp)/2;
$imgHeight = imagesy($imgTemp);

//create an output image with transparent background
$imgOutput = imagecreate($imgWidth*$imgCount, $imgHeight);
$black = imagecolorallocate($imgOutput, 0, 0, 0);
imagecolortransparent($imgOutput, $black);

//create two temp images (1 bright / 1 dark) with transparent background
$imgTempFore = imagecreate($imgWidth, $imgHeight);
$imgTempBack = imagecreate($imgWidth, $imgHeight);
$black = imagecolorallocate($imgTempFore, 0, 0, 0);
imagecolortransparent($imgTempFore, $black);
$black = imagecolorallocate($imgTempBack, 0, 0, 0);
imagecolortransparent($imgTempBack, $black);

//insert source image parts into the temp images
imagecopy($imgTempFore, $imgTemp, 0, 0, 0, 0, $imgWidth, $imgHeight);
imagecopy($imgTempBack, $imgTemp, 0, 0, $imgWidth, 0, $imgWidth*2, $imgHeight);

//set helper variables to fill the stars correct
$roundedImgCount = floor($imgRating);
$moduloImgCount = fmod($imgRating, 1);

//be Picasso
for ($i = 0; $i <= $imgCount; $i++) {
	if($i < $roundedImgCount){
		imagecopy($imgOutput, $imgTempFore, $i*$imgWidth, 0, 0, 0, $imgWidth, $imgHeight);
	} else {
		imagecopy($imgOutput, $imgTempBack, $i*$imgWidth, 0, 0, 0, $imgWidth, $imgHeight);
	}
}
imagecopy($imgOutput, $imgTempFore, $roundedImgCount*$imgWidth, 0, 0, 0, $imgWidth*$moduloImgCount, $imgHeight);

//output and destroy
imagepng($imgOutput);
imagedestroy($imgTemp);
imagedestroy($imgTempFore);
imagedestroy($imgTempBack);
imagedestroy($imgOutput);