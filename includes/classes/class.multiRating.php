<?php
/**
 * multiRating class to manage multi ratings
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.3
 */

class MultiRating {

	/* ################################################################################ */
	/*                                     VARIABLES                                    */
	/* ################################################################################ */
	private $maxRating = 5;
	private $image = '01.png';
	private $imageSize = 12;
	private $textOutput = 'true';
	private $textModification = 'false';
	private $textSize = 12;
	private $tooltipText = 'false';
	private $schemaOrg = 'false';
	private $schemaOrgType = 'reviewRating';
	private $calcAverage = 'false';
	private $ratings = array();


	/* ################################################################################ */
	/*                                   CONSTRUCTOR                                    */
	/* ################################################################################ */

	/**
	 * SingleRating constructor.
	 * @since 1.0
	 */
	public function __construct() {
		//Standards can be loaded from get_option() because USR object already set them
		$this->setMaxRating(get_option('usrMaxRating'));
		$this->setImage(get_option('usrImage'));
		$this->setImageSize(get_option('usrImageSize'));
		$this->setTextOutput(get_option('usrTextOutput'));
		$this->setTextModification(get_option('usrTextModification'));
		$this->setTextSize(get_option('usrTextSize'));
		$this->setTooltipText(get_option('usrTextAsTooltip'));
		$this->setSchemaOrg(get_option('usrSchemaOrg'));
		$this->setSchemaOrgType(get_option('usrSchemaOrgType'));
		$this->setCalcAverage(get_option('usrCalcAverage'));
	}

	/* ################################################################################ */
	/*                                    FUNCTIONS                                     */
	/* ################################################################################ */

	/* -------------------------------------------------------------------------------- */
	/* ------------------------------------ GETTER ------------------------------------ */
	/* -------------------------------------------------------------------------------- */

	/**
	 * @since 1.0
	 * @return int
	 */
	public function getMaxRating() {
		return $this->maxRating;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @since 1.0
	 * @return int
	 */
	public function getImageSize() {
		return $this->imageSize;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getTextOutput() {
		return $this->textOutput;
	}
	
	/**
	 * @since 1.3
	 * @return string
	 */
	public function hasTextModification() {
	    return $this->textModification;
	}
	
	/**
	 * @since 1.3
	 * @return int
	 */
	public function getTextSize() {
	    return $this->textSize;
	}
	
	/**
	 * @since 1.0
	 * @return string
	 */
	public function getTooltipText() {
		return $this->tooltipText;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getSchemaOrg() {
		return $this->schemaOrg;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getSchemaOrgType() {
		return $this->schemaOrgType;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getCalcAverage(){
		return $this->calcAverage;
	}

	/**
	 * @since 1.0
	 * @return array
	 */
	public function getRatings(){
		return $this->ratings;
	}

	/**
	 * @since 1.0
	 * @return int
	 */
	public function getRatingCount(){
		return count($this->getRatings());
	}

	/* -------------------------------------------------------------------------------- */
	/* ------------------------------------ SETTER ------------------------------------ */
	/* -------------------------------------------------------------------------------- */

	/**
	 * @since 1.0
	 * @param int $maxRating
	 * @return boolean
	 */
	public function setMaxRating( $maxRating ) {
		if (filter_var($maxRating, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))) === false) {
			$this->maxRating = 5;
			return false;
		} else {
			$this->maxRating = $maxRating;
			return true;
		}
	}

	/**
	 * @since 1.0
	 * @param string $image
	 * @return boolean
	 */
	public function setImage( $image ) {
		$this->image = filter_var($image, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		return true;
	}

	/**
	 * @since 1.0
	 * @param int $imageSize
	 * @return boolean
	 */
	public function setImageSize( $imageSize ) {
		if (filter_var($imageSize, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))) === false) {
			return false;
		} else {
			$this->imageSize = $imageSize;
			return true;
		}
	}

	/**
	 * @since 1.0
	 * @param string $textOutput
	 * @return boolean
	 */
	public function setTextOutput( $textOutput ) {
		if( $textOutput == 'true' || $textOutput == 'false' ) {
			$this->textOutput = $textOutput;
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * @since 1.3
	 * @param string $textModification
	 * @return boolean
	 */
	public function setTextModification( $textModification ) {
	    if( $textModification == 'true' || $textModification == 'false' ) {
	        $this->textModification = $textModification;
	        return true;
	    } else {
	        return false;
	    }
	}
	
	/**
	 * @since 1.3
	 * @param int $textSize
	 * @return boolean
	 */
	public function setTextSize( $textSize ) {
	    if (filter_var($textSize, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))) === false) {
	        return false;
	    } else {
	        $this->textSize = $textSize;
	        return true;
	    }
	}
	
	/**
	 * @since 1.0
	 * @param string $tooltipText
	 * @return boolean
	 */
	public function setTooltipText( $tooltipText ) {
		if( $tooltipText == 'true' || $tooltipText == 'false' ) {
			$this->tooltipText = $tooltipText;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param string $schemaOrg
	 * @return boolean
	 */
	public function setSchemaOrg( $schemaOrg ) {
		if( $schemaOrg == 'true' || $schemaOrg == 'false' ) {
			$this->schemaOrg = $schemaOrg;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param string $schemaOrgType
	 * @return boolean
	 */
	public function setSchemaOrgType( $schemaOrgType ) {
		$this->schemaOrgType = filter_var($schemaOrgType, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		return true;
	}

	/**
	 * @since 1.0
	 * @param string $averageCalculation
	 * @return boolean
	 */
	public function setCalcAverage($calcAverage){
		if( $calcAverage == 'true' || $calcAverage == 'false' ) {
			$this->calcAverage = $calcAverage;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param string $name
	 * @param int $rating
	 * @return boolean
	 */
	public function addRating($name, $rating) {
		$name = filter_var($name, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		$rating = str_replace(',','.', $rating);    //Many countries use a comma to represent a decimal point e.g. 4353,56
		if($name == '') {
			return false;
		}
		if (filter_var($rating, FILTER_VALIDATE_FLOAT)) {
			if ( $rating < 0 ) {
				$rating = 0;
			} elseif( $rating > $this->getMaxRating() ) {
				$rating = $this->getMaxRating();
			}
			$rating = round($rating, 1);
		} else {
			$rating = 0;
		}
		$this->ratings[count($this->ratings)+1] = array($name => $rating);
		return true;
	}
}