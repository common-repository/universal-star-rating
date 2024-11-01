<?php
/**
 * Function to insert a single rating
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 * @param array $attributes
 * @return string
 */

function insertSingleRating($attributes = null) {
	//Create a single Rating
	$singleRating = new SingleRating();

	/* ------------------------------ Start: Set Values ------------------------------- */
	//Set max rating value
	if( isset($attributes['max']) ) {
		$singleRating->setMaxRating( $attributes['max'] );
	}
	//Set a different image
	if( isset($attributes['img']) ) {
		$singleRating->setImage($attributes['img']);
	}
	//Set images size in px
	if( isset($attributes['size']) ) {
		$singleRating->setImageSize($attributes['size']);
	}
	//Set text output
	if( isset($attributes['text']) ) {
		$singleRating->setTextOutput($attributes['text']);
	}
	//Set text appearance as changeable
	if( isset($attributes['textmod']) ) {
	    $singleRating->setTextModification($attributes['textmod']);
	}
	//Set text size
	if( isset($attributes['textsize']) ) {
	    $singleRating->setTextSize($attributes['textsize']);
	}
	//Set text as tooltip
	if( isset($attributes['tooltip']) ) {
		$singleRating->setTooltipText($attributes['tooltip']);
	}
	//Set SEO
	if( isset($attributes['seo']) ) {
		$singleRating->setSchemaOrg($attributes['seo']);
	}
	//Set SEO type
	if( isset($attributes['seotype']) ) {
		$singleRating->setSchemaOrgType($attributes['seotype']);
	}
	//Set additional text
	if( isset($attributes['addtext']) ) {
		$singleRating->setAdditionalText($attributes['addtext']);
	}
	//Set rating value
	if( isset($attributes[0]) ) {
		$singleRating->setRating( $attributes[0] );
	}
	/* ------------------------------- End: Set Values -------------------------------- */

	return getImageString($singleRating, strpos($singleRating->getRating(), '.') ? 1 : 0);

}
add_shortcode('usr', 'insertSingleRating');