<?php
/**
 * Template file for USR settings
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.3
 */
?>

<?php
require_once $usrFunctionsDir . 'func.getAvailableImages.php';
require_once $usrFunctionsDir . 'func.getImagesHtml.php';

//for table tr bgcolor
$bright = 1;
?>

<form method="post" action="?page=<?php echo $usr->getMenuSlugName(); ?>&tab=settings">
    <p><?php printf(esc_html__('These settings can change the behavior and appearance of %1$sUniversal Star Rating%2$s inside your posts.', 'universal-star-rating'), '<em>', '</em>'); ?></p>
    <table class="usr">
        <tr>
            <th><?php esc_html_e('Setting', 'universal-star-rating'); ?></th>
            <th><?php esc_html_e('Configured Value', 'universal-star-rating'); ?></th>
            <th><?php esc_html_e('Default Value', 'universal-star-rating'); ?></th>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Image size (in pixel)', 'universal-star-rating'); ?></td>
            <td><input style="width: 108px;" type="text" name="usrImageSize" id="usrImageSize" value="<?php echo $usr->getImageSize(); ?>" /></td>
            <td>12</td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Max. star count (as integer)', 'universal-star-rating'); ?></td>
            <td><input style="width: 108px;" type="text" name="usrMaxRating" id="usrMaxRating" value="<?php echo $usr->getMaxRating(); ?>" /></td>
            <td><?php printf(esc_html__('5 %1$s(Minimum: 1)%2$s', 'universal-star-rating'), '<em>', '</em>'); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Text output', 'universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrTextOutput">
                    <option value="true" <?php if($usr->getTextOutput() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled', 'universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->getTextOutput() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled', 'universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Enabled', 'universal-star-rating'); ?></td>
        </tr>
	    <?php if($usr->getTextOutput() == 'true') { ?>
	    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Text appearance modification', 'universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrTextModification">
                    <option value="true" <?php if($usr->hasTextModification() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled', 'universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->hasTextModification() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled', 'universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Disabled', 'universal-star-rating'); ?></td>
        </tr>
        <?php if($usr->hasTextModification() == 'true') { ?>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Text size (in pixel)', 'universal-star-rating'); ?></td>
            <td><input style="width: 108px;" type="text" name="usrTextSize" id="usrTextSize" value="<?php echo $usr->getTextSize(); ?>" /></td>
            <td>12</td>
        </tr>
        <?php } ?>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Text output as tooltip', 'universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrTextAsTooltip">
                    <option value="true" <?php if($usr->getTooltipText() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled', 'universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->getTooltipText() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled', 'universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Disabled', 'universal-star-rating'); ?></td>
        </tr>
	    <?php } ?>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Calculate average (for multi ratings only)', 'universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrCalcAverage">
                    <option value="true" <?php if($usr->getCalcAverage() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled', 'universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->getCalcAverage() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled', 'universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Disabled', 'universal-star-rating'); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Allow shortcodes in comments', 'universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrAllowInComments">
                    <option value="true" <?php if($usr->getAllowInComments() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled', 'universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->getAllowInComments() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled', 'universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Disabled', 'universal-star-rating'); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php echo '<a href="http://schema.org/" target="_blank">Schema.org</a> <abbr title="Search Engine Optimization">SEO</abbr> ';
                printf(esc_html__('(causes %1$s errors!)','universal-star-rating'), '<a href="http://www.w3.org/" target="_blank">W3</a>'); ?></td>
            <td>
                <select style="width: 108px;" name="usrSchemaOrg">
                    <option value="true" <?php if($usr->getSchemaOrg() == 'true'){ echo 'selected';} ?>><?php esc_html_e('Enabled','universal-star-rating'); ?></option>
                    <option value="false" <?php if($usr->getSchemaOrg() == 'false'){ echo 'selected';} ?>><?php esc_html_e('Disabled','universal-star-rating'); ?></option>
                </select>
            </td>
            <td><?php esc_html_e('Disabled','universal-star-rating'); ?></td>
        </tr>
        <?php if($usr->getSchemaOrg() == 'true') { ?>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Schema.org rating type','universal-star-rating'); ?></td>
            <td>
                <select style="width: 108px;" name="usrSchemaOrgType">
                    <option value="rating" <?php if($usr->getSchemaOrgType() == 'rating'){ echo 'selected';} ?>>rating</option>
                    <option value="reviewRating" <?php if($usr->getSchemaOrgType() == 'reviewRating'){ echo 'selected';} ?>>reviewRating</option>
                </select>
            </td>
            <td>reviewRating</td>
        </tr>
        <?php } ?>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Folder for self made images','universal-star-rating'); ?></td>
            <td>/wp-content/<input style="width: 108px;" type="text" name="usrCustomImagesFolder" id="usrCustomImagesFolder" value="<?php echo $usr->getCustomImagesFolder(); ?>" /></td>
            <td>cusri</td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td><?php esc_html_e('Image','universal-star-rating'); ?></td>
            <td colspan="2"><?php
                echo getImagesHtml(getAvailableImages($usrBaseDir . '/images/20/'));
                echo getImagesHtml(getAvailableImages(WP_CONTENT_DIR . '/' . $usr->getCustomImagesFolder() . '/20/'), 'c'); ?>
            </td>
        </tr>
    </table>
    <p>
        <input type="submit" name="usrOptionsUpdate" class="button-primary" value="<?php esc_html_e('Save Changes','universal-star-rating'); ?>" />
        <input type="submit" name="usrOptionsReset" class="button" value="<?php esc_html_e('Reset Settings','universal-star-rating'); ?>" />
    </p>
</form>