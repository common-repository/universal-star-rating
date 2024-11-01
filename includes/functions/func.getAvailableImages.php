<?php
/**
 * Function to get all available images within a specific folder
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @param string $folder
 * @return array
 */

function getAvailableImages($folder) {
	$fileArray = array();

	$handle = opendir( $folder );
	while ( $file = readdir( $handle ) ) {
		if ( ! is_dir( $file ) ) {
			$fileArray[] = $file;
		}
	}
	closedir( $handle );
	sort( $fileArray );

	return $fileArray;
}