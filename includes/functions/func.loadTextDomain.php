<?php
/**
 * Function to load USR text domain
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0.1
 * @version 1.1
 * @return void
 */

function universal_star_rating_load_plugin_textdomain() {
	load_plugin_textdomain( 'universal-star-rating', FALSE, 'universal-star-rating/languages/' );
}
add_action( 'plugins_loaded', 'universal_star_rating_load_plugin_textdomain' );