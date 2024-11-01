<?php
/**
 * Template file for USR settings update
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 * @return void
 */

//If settings got changed
if(isset($_POST['usrOptionsUpdate'])) {
    if(isset($_POST['usrImageSize'])) {
        $usr->setImageSize($_POST['usrImageSize']);
    }
    if(isset($_POST['usrMaxRating'])) {
        $usr->setMaxRating($_POST['usrMaxRating']);
    }
    if(isset($_POST['usrTextOutput'])) {
        $usr->setTextOutput($_POST['usrTextOutput']);
    }
    if(isset($_POST['usrTextModification'])) {
        $usr->setTextModification($_POST['usrTextModification']);
    }
    if(isset($_POST['usrTextSize'])) {
        $usr->setTextSize($_POST['usrTextSize']);
    }
    if(isset($_POST['usrTextAsTooltip'])) {
        $usr->setTooltipText($_POST['usrTextAsTooltip']);
    }
    if(isset($_POST['usrCalcAverage'])) {
        $usr->setCalcAverage($_POST['usrCalcAverage']);
    }
    if(isset($_POST['usrAllowInComments'])) {
        $usr->setAllowInComments($_POST['usrAllowInComments']);
    }
    if(isset($_POST['usrSchemaOrg'])) {
        $usr->setSchemaOrg($_POST['usrSchemaOrg']);
    }
    if(isset($_POST['usrSchemaOrgType'])) {
        $usr->setSchemaOrgType($_POST['usrSchemaOrgType']);
    }
    if(isset($_POST['usrStarImage'])) {
        $usr->setImage( $_POST['usrStarImage'] );
    }
    if(isset($_POST['usrCustomImagesFolder'])) {
        if($usr->getCustomImagesFolder() != $_POST['usrCustomImagesFolder']) {
            if (substr($usr->getImage(), 0, 1) === "c") {
                $usr->setImage( '01.png' );
            }
            $usr->setCustomImagesFolder( $_POST['usrCustomImagesFolder'] );
        }
    }

	printInfoMessage(esc_html__('Settings saved.', 'universal-star-rating'), 'success');
}

//If settings got reset
if(isset($_POST['usrOptionsReset'])) {
    $usr->setImageSize(12);
    $usr->setMaxRating(5);
    $usr->setTextOutput('true');
    $usr->setTextModification('false');
    $usr->setTextSize(12);
    $usr->setTooltipText('false');
    $usr->setCalcAverage('false');
    $usr->setAllowInComments('false');
    $usr->setSchemaOrg('false');
    $usr->setSchemaOrgType('reviewRating');
    $usr->setCustomImagesFolder('cusri');
    $usr->setImage('01.png');

	printInfoMessage(esc_html__('Settings reset to default.', 'universal-star-rating'), 'success');
}
?>