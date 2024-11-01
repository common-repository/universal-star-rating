<?php
/**
 * Function to add a filter to explicitly allow shortcodes inside comments
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @param boolean $allowed
 * @return void
 */

function permitShortcodedComments($allowed){
	if($allowed == true){
		add_filter( 'comment_text', 'shortcode_unautop');
		add_filter( 'comment_text', 'do_shortcode' );
	}
}