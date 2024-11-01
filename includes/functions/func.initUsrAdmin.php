<?php
/**
 * Function to add USR settings page to WP admin area
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @return void
 */

function initUsrAdmin() {
	//if user is administrator options will be displayed
	if (current_user_can('manage_options')) {
		//Register the option group usrSettings with the option name usrOption
		if (function_exists('register_setting')) {
			register_setting('usrSettings', 'usrSettings', '');
		}
	}
}
add_action('admin_init', 'initUsrAdmin');