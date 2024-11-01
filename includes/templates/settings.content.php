<?php
/**
 * Template file for USR content/settings page
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.0
 */
?>

<div id="usrContent" class="wrap">

    <?php
    switch ($activeTab) {
        case 'description':
            // NOTES ON USAGE
	        require_once $usrTemplateDir . 'settings.content.description.php';
            break;

        case 'settings':
            // SETTINGS
	        require_once $usrTemplateDir . 'settings.content.settings.php';
            break;

        case 'preview_examples':
            // PREVIEW
	        require_once $usrTemplateDir . 'settings.content.preview.php';
	        break;
    }
    ?>

</div>