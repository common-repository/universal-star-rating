<?php
/**
 * Function to add the USR settings page
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 * @return void
 */

function addUsrSettingsPage() {
	global $usr;
	add_options_page($usr->getPluginName(), $usr->getPluginName(), 'manage_options', $usr->getMenuSlugName(), 'showUsrSettingsPage');
}
add_action('admin_menu', 'addUsrSettingsPage');

//USR settings page content
function showUsrSettingsPage() {
	global $usrBaseDir, $usrFunctionsDir, $usr;
    $usrTemplateDir = $usrBaseDir . 'includes/templates/';

	//Print settings headline
	require_once $usrTemplateDir . 'settings.headline.php';

	//Update settings
	require_once $usrTemplateDir . 'settings.update.php';

	//Print settings content
	require_once $usrTemplateDir . 'settings.content.php';

	//Print settings footer
	require_once $usrTemplateDir . 'settings.footer.php';
}