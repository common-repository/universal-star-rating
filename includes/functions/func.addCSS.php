<?php
/**
 * Function to add stylesheets to the page
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @return void
 */

function addCSS() {
	global $usrBaseUrl;
	$usrCssBaseUrl = $usrBaseUrl . 'css/';
	$usrCss = 'style.css';
	wp_enqueue_style('usrStyle', $usrCssBaseUrl . $usrCss);
}
add_action('init', 'addCSS');