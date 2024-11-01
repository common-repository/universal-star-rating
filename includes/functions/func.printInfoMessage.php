<?php
/**
 * Function to print info messages
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 * @return boolean
 */

function printInfoMessage($message, $type = 'info') {
	echo '<div class="wrap">';
	echo '<div id="usrInfo" class="' . $type . '">';
	echo '<strong>';
	switch ($type) {
		case 'success':
			esc_html_e('Success!', 'universal-star-rating');
			break;
	}
	echo '</strong> ';
	echo $message;
	echo '</div>';
	echo '</div>';

	return true;
}