<?php
/**
 * Function to show all available images within settings page
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.1
 * @param array $imgArray
 * @param string $preNameString = null
 * @return string
 */

function getImagesHtml($imgArray, $preNameString = null) {
	$returnValue = '';
	$allowedExtensions = array( 'jpg', 'jpeg', 'png' );

	$returnValue .= '<table class="usr" style="border: none;">';

	//For each file inside the array...
	for($i = 0; $i < count($imgArray); $i++)
	{
		$fileParts = pathinfo($imgArray[$i]);
		if(in_array($fileParts['extension'], $allowedExtensions)){

			if(!isset($radioPosition) || $radioPosition == 2){
				$radioPosition = 1;
				$returnValue .= '<tr><td style="border: none;">';
			} else {
				$radioPosition = 2;
				$returnValue .= '<td style="border: none;">';
			}

			//User has the opportunity to choose this image file
			$returnValue .= '<input type="radio" name="usrStarImage" value="' . $preNameString . $imgArray[$i] . '"';
			if(get_option('usrImage') == $preNameString . $imgArray[$i]){
				$returnValue .= ' checked';
			}
			$returnValue .= '> ';
			$returnValue .= insertSingleRating(
				array('3.5',
					'img' => $preNameString . $imgArray[$i],
					'text' => 'false',
					'max' => '5',
					'size' => '12'));
			$returnValue .= ' <code>' . $preNameString . $imgArray[$i] . '</code></td>';

			if($i+1 == count($imgArray) || $radioPosition == 2){
				$returnValue .= '</tr>';
			}
		}
	}
	$returnValue .= '</table>';
	return $returnValue;
}