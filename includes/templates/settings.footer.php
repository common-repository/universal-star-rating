<?php
/**
 * Template file for USR footer
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.1
 */
?>

<div id="usrFooter" class="wrap">
	<p>
		<a href="<?php echo $usr->getDonationURL();?>" target="_blank">
			<?php esc_html_e('Donate', 'universal-star-rating');?></a> |
		<a href="<?php echo $usr->getFaqURL();?>" target="_blank">
			<?php esc_html_e('FAQ', 'universal-star-rating');?></a> |
		<a href="<?php echo $usr->getDocURL();?>" target="_blank">
			<?php esc_html_e('Documentation', 'universal-star-rating');?></a> |
		<a href="<?php echo $usr->getSupportURL();?>" target="_blank">
			<?php esc_html_e('Support', 'universal-star-rating');?></a>
	</p>
	<p><?php esc_html_e('Plugin Version', 'universal-star-rating');?>:
		<strong><?php echo $usr->getVersion();?></strong>
	</p>
</div>