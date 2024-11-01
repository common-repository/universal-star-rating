<?php
/**
 * Function to insert a multi rating
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 * @param array $attributes
 * @return string
 */

function insertMultiRating($attributes = null) {
	//Create a multi rating
	$multiRating = new MultiRating();

	/* ------------------------------ Start: Set Values ------------------------------- */
	//Set max rating value
	if( isset($attributes['max']) ) {
		$multiRating->setMaxRating( $attributes['max'] );
		unset( $attributes['max'] );
	}
	//Set a different image
	if( isset($attributes['img']) ) {
		$multiRating->setImage($attributes['img']);
		unset( $attributes['img'] );
	}
	//Set images size in px
	if( isset($attributes['size']) ) {
		$multiRating->setImageSize($attributes['size']);
		unset( $attributes['size'] );
	}
	//Set text output
	if( isset($attributes['text']) ) {
		$multiRating->setTextOutput($attributes['text']);
		unset( $attributes['text'] );
	}
	//Set text appearance as changeable
	if( isset($attributes['textmod']) ) {
	    $multiRating->setTextModification($attributes['textmod']);
	    unset( $attributes['textmod'] );
	}
	//Set text size
	if( isset($attributes['textsize']) ) {
	    $multiRating->setTextSize($attributes['textsize']);
	    unset( $attributes['textsize'] );
	}
	//Set text as tooltip
	if( isset($attributes['tooltip']) ) {
		$multiRating->setTooltipText($attributes['tooltip']);
		unset( $attributes['tooltip'] );
	}
	//Set SEO
	if( isset($attributes['seo']) ) {
		$multiRating->setSchemaOrg($attributes['seo']);
		unset( $attributes['seo'] );
	}
	//Set SEO type
	if( isset($attributes['seotype']) ) {
		$multiRating->setSchemaOrgType($attributes['seotype']);
		unset( $attributes['seotype'] );
	}
	//Set average calculation
	if( isset($attributes['avg']) ) {
		$multiRating->setCalcAverage($attributes['avg']);
		unset( $attributes['avg'] );
	}
	//Add ratings
	foreach ($attributes as $attribute) {
		//If there is a pair...
		if(strpos($attribute,':')){
			//splitting Key:Value into two variables - User can't use a ':' inside Key
			list($name, $rating) = explode(":", $attribute, 2);
			$multiRating->addRating($name, $rating);
		//If there is just a key...
		} else {
			$multiRating->addRating($attribute, 0);
		}
	}
	/* ------------------------------- End: Set Values -------------------------------- */

	//single rating is needed to get the image string
	$singleRating = new singleRating();
	$singleRating->setMaxRating($multiRating->getMaxRating());
	$singleRating->setImage($multiRating->getImage());
	$singleRating->setImageSize($multiRating->getImageSize());
	$singleRating->setTextOutput($multiRating->getTextOutput());
	$singleRating->setTextModification($multiRating->hasTextModification());
	$singleRating->setTextSize($multiRating->getTextSize());
	$singleRating->setTooltipText($multiRating->getTooltipText());
	$singleRating->setSchemaOrg($multiRating->getSchemaOrg());
	$singleRating->setSchemaOrgType($multiRating->getSchemaOrgType());

	$sumRatings = 0;    //to get the average
	$decimals = 0;      //Is there a float value within the ratings?
	foreach ( $multiRating->getRatings() as $rating ){
		$ratingValue = reset($rating);
		if(strpos($ratingValue, '.')){
			//there is a float value...
			$decimals = 1;
		}
		$sumRatings += $ratingValue;
	}
	if($sumRatings > 0) {
		$avgRating = ( $sumRatings / $multiRating->getRatingCount() );
		if(strpos($avgRating, '.')){
			//at least the average is a float value...
			$decimals = 1;
		}
	} else {
		$avgRating = 0;
	}

	$returnString = '<table class="usrlist">';

	foreach( $multiRating->getRatings() as $rating ) {
		$ratingValue = reset($rating);
		$ratingName = key($rating);

		$singleRating->setRating($ratingValue);

		$returnString .= '<tr><td';
		if($multiRating->hasTextModification() == 'true') { $returnString .= ' style="font-size:' . $multiRating->getTextSize() . 'px;"'; }
		$returnString .= '>' . $ratingName . ':</td>';
		$returnString .= '<td class="pad-left">' . getImageString($singleRating, $decimals) . '</td></tr>';
	}

	//If the average is needed...
	if ($multiRating->getCalcAverage() == "true") {
		$singleRating->setRating($avgRating);
		$returnString .= '<tr><td style="border-top:1px solid;';
		if($multiRating->hasTextModification() == 'true') { $returnString .= ' font-size:' . $multiRating->getTextSize() . 'px;"'; }
		$returnString .= '">' . esc_html__('Average', 'universal-star-rating') . ':</td>';
		$returnString .= '<td style="border-top:1px solid;">' . getImageString($singleRating, $decimals) . '</td></tr>';
	}

	$returnString .= '</table>';

	return $returnString;
}
add_shortcode('usrlist', 'insertMultiRating');