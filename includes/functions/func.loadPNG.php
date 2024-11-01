<?php
/**
 * Function to load a png image
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @param string $image
 * @return $png
 */

function loadPNG($image)
{
	//Attempt to open
	$png = @imagecreatefrompng($image);

	//See if it failed
	if(!$png)
	{
		//Create a blank image
		$png  = imagecreatetruecolor(150, 30);
		$bgColor = imagecolorallocate($png, 255, 255, 255);
		$textColor  = imagecolorallocate($png, 0, 0, 0);

		imagefilledrectangle($png, 0, 0, 150, 30, $bgColor);

		//Output an error message
		imagestring($png, 1, 5, 5, ' Error loading ' . $image, $textColor);
	}

	return $png;
}