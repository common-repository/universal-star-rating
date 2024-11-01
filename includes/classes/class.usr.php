<?php
/**
 * USR class to manage basic settings
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.4
 */

class USR {

	/* ################################################################################ */
	/*                                     VARIABLES                                    */
	/* ################################################################################ */
	private $pluginName = 'Universal Star Rating';
	private $menuSlugName = 'Universal-Star-Rating';

	private $version = '2.1.0';
	private $imageSize = 12;
	private $maxRating = 5;
	private $textOutput = 'true';
	private $textModification = 'false';
	private $textSize = 12;
	private $tooltipText = 'false';
	private $calcAverage = 'false';
	private $schemaOrg = 'false';
	private $schemaOrgType = 'reviewRating';
	private $customImagesFolder = 'cusri';
	private $image = '01.png';
	private $allowInComments = 'false';
	private $language = 'en';

	//URLs for settings page
	//private $donationURL = 'https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=paypal%40cizero%2ede&lc=DE&item_name=Universal%20Star%20Rating%20%2d%20Cizero%2ede&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest';
	private $donationURL = 'https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donate%40universal%2dstar%2drating%2ede&lc=DE&item_name=Universal%20Star%20Rating%20&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest';
	private $faqURL = 'https://de.wordpress.org/plugins/universal-star-rating/faq/';
	private $docURL = 'http://www.universal-star-rating.de';
	private $supportURL = 'https://wordpress.org/support/plugin/universal-star-rating';

	/* ################################################################################ */
	/*                                   CONSTRUCTOR                                    */
	/* ################################################################################ */

	/**
	 * USR constructor.
	 * @since 1.0
	 */
	public function __construct() {
		//Set WP options if necessary
		$this->addWPOption('usrVersion', $this->getVersion());
		$this->addWPOption('usrImageSize', $this->getImageSize());
		$this->addWPOption('usrMaxRating', $this->getMaxRating());
		$this->addWPOption('usrTextOutput', $this->getTextOutput());
		$this->addWPOption('usrTextModification', $this->hasTextModification());
		$this->addWPOption('usrTextSize', $this->getTextSize());
		$this->addWPOption('usrTextAsTooltip', $this->getTooltipText());
		$this->addWPOption('usrCalcAverage', $this->getCalcAverage());
		$this->addWPOption('usrAllowInComments', $this->getAllowInComments());
		$this->addWPOption('usrSchemaOrg', $this->getSchemaOrg());
		$this->addWPOption('usrSchemaOrgType', $this->getSchemaOrgType());
		$this->addWPOption('usrCustomImagesFolder', $this->getCustomImagesFolder());
		$this->addWPOption('usrImage', $this->getImage());
		$this->addWPOption('usrLang', $this->getLanguage());

		//Update the plugin
		$this->update();

		//Update variables and saved settings
		$this->setVersion(get_option('usrVersion'));
		$this->setImageSize(get_option('usrImageSize'));
		$this->setMaxRating(get_option('usrMaxRating'));
		$this->setTextOutput(get_option('usrTextOutput'));
		$this->setTextModification(get_option('usrTextModification'));
		$this->setTextSize(get_option('usrTextSize'));
		$this->setTooltipText(get_option('usrTextAsTooltip'));
		$this->setCalcAverage(get_option('usrCalcAverage'));
		$this->setAllowInComments(get_option('usrAllowInComments'));
		$this->setSchemaOrg(get_option('usrSchemaOrg'));
		$this->setSchemaOrgType(get_option('usrSchemaOrgType'));
		$this->setCustomImagesFolder(get_option('usrCustomImagesFolder'));
		$this->setImage(get_option('usrImage'));
		$this->setLanguage(get_option('usrLang'));
	}

	/* ################################################################################ */
	/*                                    FUNCTIONS                                     */
	/* ################################################################################ */

	/**
	 * Function is used to update the plugin if necessary.
	 *
	 * @since 1.0
	 */
	private function update() {
		if ( $this->getVersion() != get_option('usrVersion') ) {
			/* ---------------------------------- to V2.0.0 ----------------------------------- */

			//Delete old name for shortcodes in comments
			if( get_option('usrPermitShortcodedComments') ){
				$this->setAllowInComments(get_option('usrPermitShortcodedComments'));
				delete_option('usrPermitShortcodedComments');
			}

			//Delete old name for maximal rating value
			if( get_option('usrMaxStars') ){
				$this->setMaxRating(get_option('usrMaxStars'));
				delete_option('usrMaxStars');
			}

			//Delete old name for image size
			if( get_option('usrStarSize') ) {
				$this->setImageSize(get_option('usrStarSize'));
				delete_option('usrStarSize');
			}

			//Delete old name for image
			if( get_option('usrStarImage') ) {
				$this->setImage(get_option('usrStarImage'));
				delete_option('usrStarImage');
			}

			//Delete old name for text based output
			if( get_option('usrStarText') ) {
				$this->setTextOutput(get_option('usrStarText'));
				delete_option('usrStarText');
			}

			//Update version in DB
			$this->setVersion($this->getVersion());
		}
	}

	/**
	 * @since 1.0
	 * @param string $name
	 * @param string $value
	 * @param string $deprecated = ''
	 * @param string $autoload = 'yes'
	 * @return boolean
	 */
	public function addWPOption($name, $value, $deprecated = '', $autoload = 'yes') {
		if( !get_option($name) ) {
			add_option($name, $value, $deprecated, $autoload);
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param boolean $pre = true
	 */
	public function dump( $pre = true ) {
		if ( $pre ) {
			echo '<pre>';
			var_dump($this);
			echo '</pre>';
		} else {
			var_dump($this);
		}
	}

	/**
	 * @since 1.0
	 * @param BOOLEAN $tableized = true
	 */
	public function printSettings( $tableized = true ) {
		if( $tableized ) {
			echo '<table>';
			foreach ($this as $key => $value) {
				echo '<tr>';
				echo '<td style="padding: 3px;">' . $key . '</td>';
				echo '<td style="padding: 3px;">' . $value . '</td>';
				echo '</tr>';
			}
			echo '</table>';
		} else {
			foreach ($this as $key => $value) {
				print "$key = $value<br>";
			}
		}
	}

	/* -------------------------------------------------------------------------------- */
	/* ------------------------------------ GETTER ------------------------------------ */
	/* -------------------------------------------------------------------------------- */

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getPluginName() {
		return $this->pluginName;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getMenuSlugName() {
		return $this->menuSlugName;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
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
	 * @return int
	 */
	public function getMaxRating() {
		return $this->maxRating;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getTextOutput() {
		return $this->textOutput;
	}

	/**
	 * @since 1.4
	 * @return string
	 */
	public function hasTextModification() {
	    return $this->textModification;
	}
	
	/**
	 * @since 1.4
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
	public function getCalcAverage() {
		return $this->calcAverage;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getAllowInComments() {
		return $this->allowInComments;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getCustomImagesFolder() {
		return $this->customImagesFolder;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
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
	public function getImage() {
		return $this->image;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getDonationURL() {
		return $this->donationURL;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getDocURL() {
		return $this->docURL;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFaqURL() {
		return $this->faqURL;
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getSupportURL() {
		return $this->supportURL;
	}

	/* -------------------------------------------------------------------------------- */
	/* ------------------------------------ SETTER ------------------------------------ */
	/* -------------------------------------------------------------------------------- */

	/**
	 * @since 1.0
	 * @param string $version
	 * @return boolean
	 */
	public function setVersion( $version ) {
		$this->version = $version;
		update_option('usrVersion', $version);
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
			update_option( 'usrImageSize', $imageSize );
			return true;
		}
	}

	/**
	 * @since 1.0
	 * @param int $maxRating
	 * @return boolean
	 */
	public function setMaxRating( $maxRating ) {
		if (filter_var($maxRating, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))) === false) {
			return false;
		} else {
			$this->maxRating = $maxRating;
			update_option( 'usrMaxRating', $maxRating );
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
	        update_option( 'usrTextOutput', $textOutput );
	        return true;
	    } else {
	        return false;
	    }
	}
	
	/**
	 * @since 1.4
	 * @param string $textModification
	 * @return boolean
	 */
	public function setTextModification( $textModification ) {
	    if( $textModification == 'true' || $textModification == 'false' ) {
	        $this->textModification = $textModification;
	        update_option( 'usrTextModification', $textModification );
	        return true;
	    } else {
	        return false;
	    }
	}
	
	/**
	 * @since 1.4
	 * @param int $textSize
	 * @return boolean
	 */
	public function setTextSize( $textSize ) {
	    if (filter_var($textSize, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))) === false) {
	        return false;
	    } else {
	        $this->textSize = $textSize;
	        update_option( 'usrTextSize', $textSize );
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
			update_option('usrTextAsTooltip', $tooltipText);
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param string $calcAverage
	 * @return boolean
	 */
	public function setCalcAverage( $calcAverage ) {
		if( $calcAverage == 'true' || $calcAverage == 'false' ) {
			$this->calcAverage = $calcAverage;
			update_option( 'usrCalcAverage', $calcAverage );
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param String $allowInComments
	 * @return boolean
	 */
	public function setAllowInComments( $allowInComments ) {
		if( $allowInComments == 'true' || $allowInComments == 'false' ) {
			$this->allowInComments = $allowInComments;
			update_option( 'usrAllowInComments', $allowInComments );
			if($allowInComments == 'true'){
				add_filter( 'comment_text', 'shortcode_unautop');
				add_filter( 'comment_text', 'do_shortcode' );
			}
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @since 1.0
	 * @param string $customImagesFolder
	 * @return boolean
	 */
	public function setCustomImagesFolder( $customImagesFolder ) {
		$customImagesFolder = filter_var($customImagesFolder, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		if($customImagesFolder != '') {
			$this->customImagesFolder = $customImagesFolder;

			if ( ! file_exists( WP_CONTENT_DIR . '/' . $customImagesFolder ) ) {
				mkdir( WP_CONTENT_DIR . '/' . $customImagesFolder );
				$numbers = array( 20, 40, 60, 80, 100, 189 );
				foreach ( $numbers as $value ) {
					if ( ! file_exists( WP_CONTENT_DIR . '/' . $customImagesFolder . '/' . $value ) ) {
						mkdir( WP_CONTENT_DIR . '/' . $customImagesFolder . '/' . $value );
					}
				}
			}

			update_option( 'usrCustomImagesFolder', $customImagesFolder );
			return true;
		}
		return false;
	}

	/**
	 * @since 1.0
	 * @param string $language
	 * @return boolean
	 */
	public function setLanguage( $language ) {
		$this->language = $language;
		update_option('usrLang', $language);
		return true;
	}

	/**
	 * @since 1.0
	 * @param string $schemaOrg
	 * @return boolean
	 */
	public function setSchemaOrg( $schemaOrg ) {
		if( $schemaOrg == 'true' || $schemaOrg == 'false' ) {
			$this->schemaOrg = $schemaOrg;
			update_option('usrSchemaOrg', $schemaOrg);
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
		$schemaOrgType = filter_var($schemaOrgType, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		$this->schemaOrgType = $schemaOrgType;
		update_option( 'usrSchemaOrgType', $schemaOrgType );
		return true;
	}

	/**
	 * @since 1.0
	 * @param string $image
	 * @return boolean
	 */
	public function setImage( $image ) {
		$image = filter_var($image, FILTER_SANITIZE_STRING, array("flags" => array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)));
		$this->image = $image;
		update_option( 'usrImage', $image );
		return true;
	}
}