<?php
/**
 * Function to get the image html string
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.4
 * @param singleRating $singleRating
 * @return string
 */

function getImageString($singleRating, $decimals = 0) {
	global $usrBaseUrl, $usr;

	$returnString = '';

	if($singleRating->getSchemaOrg() == 'true') {
		$returnString .= '<div itemprop="' . $singleRating->getSchemaOrgType() . '" itemscope itemtype="http://schema.org/Rating" class="usr">';
		$returnString .= '<meta itemprop="worstRating" content="0" />';
		if($singleRating->getTextOutput() == 'false') {
			$returnString .= '<meta itemprop="ratingValue" content="' . number_format_i18n($singleRating->getRating(), $decimals) . '" />';
			$returnString .= '<meta itemprop="bestRating" content="' . $singleRating->getMaxRating() . '" />';
		}
	}

	if($singleRating->getTextOutput() == 'true' && $singleRating->getTooltipText() == 'true') {
		$returnString .= '<a class="tooltip">';
	}

	$imgURL = $usrBaseUrl . 'includes/image.php';
	$imgURL .= '?img=' . $singleRating->getImage();
	$imgURL .= '&amp;px=' . $singleRating->getImageSize();
	$imgURL .= '&amp;max=' . $singleRating->getMaxRating();
	$imgURL .= '&amp;rat=' . $singleRating->getRating();
	//Check if this is a custom image
	if (substr($singleRating->getImage(), 0, 1) === "c"){
		$imgURL .= '&amp;folder=' . $usr->getCustomImagesFolder();
	}

	$returnString .= '<img class="usr" src="' . $imgURL . '" alt="' . $singleRating->getRating() . ' out of ' . $singleRating->getMaxRating() . ' stars" style="height: '. $singleRating->getImageSize() .'px !important;" />';

	if($singleRating->getTextOutput() == 'true') {
		if($singleRating->getTooltipText() == 'true') {
			$returnString .= '<span class="tooltip"><img class="callout" src="' . $usrBaseUrl . 'images/callout.gif" />';
		} elseif($singleRating->hasTextModification() == 'true') {
		    $returnString .= '<div style="font-size:' . $singleRating->getTextSize() . 'px;" class="usr">';
		}

		if($singleRating->getSchemaOrg() == 'true') {
			$returnString .= ' (<span itemprop="ratingValue">'. number_format_i18n($singleRating->getRating(), $decimals) .'</span> / <span itemprop="bestRating">' . $singleRating->getMaxRating() . '</span>' . $singleRating->getAdditionalText() . ')';
		} else {
			$returnString .= ' (' . number_format_i18n($singleRating->getRating(), $decimals) . ' / ' . $singleRating->getMaxRating() . $singleRating->getAdditionalText() . ')';
		}

		if($singleRating->getTooltipText() == 'true') {
			$returnString .= '</span></a>';
		} elseif($singleRating->hasTextModification() == 'true') {
		    $returnString .= '</div>';
		}
	}

	if($singleRating->getSchemaOrg() == 'true') {
		$returnString .= '</div>';
	}

	return $returnString;
}