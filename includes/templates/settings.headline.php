<?php
/**
 * Template file for USR header
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 */

global $usrBaseUrl;
?>

<div id="usrHeadline" class="wrap">
	<div class="usr-thumbnail">
		<img class="usr-thumbnail" src="<?php echo $usrBaseUrl; ?>/images/icon.svg">
	</div>
    <h1 class="usr-thumbnail"><?php echo $usr->getPluginName();?></h1>
    <span class="usr-byline"><?php esc_html_e('By', 'universal-star-rating'); ?> Chasil</span>
    
	<?php
    $whitelistTabs = array('description', 'settings', 'preview_examples');
	if(isset($_GET['tab']) && in_array($_GET['tab'], $whitelistTabs)) {
		$activeTab = $_GET['tab'];
	} else {
		$activeTab = 'settings';
    }
	?>

    <h2 class="nav-tab-wrapper usr-settings-header">
        <a href="?page=<?php echo $usr->getMenuSlugName(); ?>&tab=description" class="nav-tab <?php echo $activeTab == 'description' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Description', 'universal-star-rating'); ?></a>
        <a href="?page=<?php echo $usr->getMenuSlugName(); ?>&tab=settings" class="nav-tab <?php echo $activeTab == 'settings' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Settings', 'universal-star-rating'); ?></a>
        <a href="?page=<?php echo $usr->getMenuSlugName(); ?>&tab=preview_examples" class="nav-tab <?php echo $activeTab == 'preview_examples' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Preview / Examples', 'universal-star-rating'); ?></a>
    </h2>
</div>