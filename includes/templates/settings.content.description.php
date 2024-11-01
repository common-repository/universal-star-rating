<?php
/**
 * Template file for USR description
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.2
 */
?>

<?php
//for table tr bgcolor
$bright = 1;
?>

<h3>Shortcodes</h3>
<p>
    <?php printf(esc_html__('Wordpress supports so-called %1$s. They have been introduced for creating macros to be used in a post\'s content. See %2$s for more details.', 'universal-star-rating'), '<em>Shortcodes</em>', '<a href="https://codex.wordpress.org/shortcode" target="_blank">codex.wordpress.org</a>');?>
</p>

<h3>Universal Star Rating</h3>
<p>
    <?php printf(esc_html__('%1$s provides 2 shortcodes to give the author the opportunity to add ratings for data, products and services with the aid of a classic star rating system.', 'universal-star-rating'), '<em>Universal Star Rating</em>'); ?>
</p>

<h4>Single Rating</h4>
<p>
    <?php printf(esc_html__('To insert a single rating in a post, you only need to enter %1$s. In this example 5 is the rating or amount of stars.', 'universal-star-rating'), '<code>[usr 5]</code>'); ?>
</p>

<h4>Multi Rating</h4>
<p>
    <?php printf(esc_html__('To insert a tabular list of reviews in a post, you only need to enter %1$s. The so-called key/value pairs combine criterias and ratings with each other. Your list should consist of more than one key/value pair.', 'universal-star-rating'), '<code>[usrlist "Pizza:3" "Ice Cream:3.5" (...)]</code>'); ?>
</p>

<h4><?php esc_html_e('Attributes', 'universal-star-rating'); ?></h4>
<p>
    <?php esc_html_e('Both shortcodes can be used with additional attributes to override the default settings. This only affects the respective rating.', 'universal-star-rating'); ?>
    <table class="usr">
        <tr>
            <th><?php esc_html_e('Attribute', 'universal-star-rating'); ?></th>
            <th><?php esc_html_e('Description', 'universal-star-rating'); ?></th>
            <th><?php esc_html_e('Single Rating', 'universal-star-rating'); ?></th>
            <th><?php esc_html_e('Multi Rating', 'universal-star-rating'); ?></th>
            <th colspan="2"><?php esc_html_e('Example', 'universal-star-rating'); ?></th>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>img=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for the used image (make sure that the image name is correct!)', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>img=&quot;03.png&quot;</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'img' => '03.png')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>max=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for the max. rating', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>max=3</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'max' => '3')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>size=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for the image size (in pixel)', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>size=20</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'size' => '20')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>text=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for text based output (can be &quot;true&quot; or &quot;false&quot;)', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>text=&quot;false&quot;</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'text' => 'false')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>textmod=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for text appearance modification (can be &quot;true&quot; or &quot;false&quot;)', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>textmod=&quot;true&quot;</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'textmod' => 'true')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>textsize=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for text size (in pixel). Will only take effect if text appearance modification is enabled.', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>textsize=&quot;20&quot;</code> textmod=&quot;true&quot;]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'textsize' => '20', 'textmod' => 'true')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>tooltip=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting for text output as tooltip (can be &quot;true&quot; or &quot;false&quot;). Text output must be activated.', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;">x</td>
            <td>[usr 3.5 <code>tooltip=&quot;true&quot;</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'text' => 'true', 'tooltip' => 'true')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>addtext=&quot;&quot;</td>
            <td><?php esc_html_e('Adds custom text to the text output. Text output must be activated.', 'universal-star-rating'); ?></td>
            <td style="text-align: center;">x</td>
            <td style="text-align: center;"></td>
            <td>[usr 3.5 <code>addtext=&quot;based on 100 ratings&quot;</code>]</td>
            <td style="border: none;"><?php echo insertSingleRating(array('3.5', 'text' => 'true', 'addtext' => 'based on 100 ratings')); ?></td>
        </tr>
        <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
            <td>avg=&quot;&quot;</td>
            <td><?php esc_html_e('Overrides the setting to calculate average for multi ratings (can be &quot;true&quot; or &quot;false&quot;)', 'universal-star-rating'); ?></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;">x</td>
            <td>[usrlist &quot;Pizza:3&quot; &quot;Ice Cream:3.5&quot; <code>avg=&quot;true&quot;</code>]</td>
            <td style="border: none;"><?php echo insertMultiRating(array('Pizza:3', 'Ice Cream:3.5', 'avg' => 'true')); ?></td>
        </tr>
    </table>
    <?php /*
    <ul style="margin-left: 20px;">
        <li type=square><?php echo _('<code>img=&quot;image.name&quot;</code> overrides the source image. Make sure that the image name is correct!'); ?></li>
        <li type=square><?php echo _('<code>max=10</code> overrides the setting for the max. rating'); ?></li>
        <li type=square><?php echo _('<code>size=20</code> overrides the setting for the star size'); ?></li>
        <li type=square><?php echo _('<code>text=false</code> overrides the setting for text based output (can be &quot;true&quot; or &quot;false&quot;)'); ?></li>
        <li type=square><?php echo _('<code>tooltip=false</code> overrides the setting for text output as a tooltip (can be &quot;true&quot; or &quot;false&quot;)'); ?></li>
    </ul>
    <?php echo _('The multi rating shortcode can be used with an additional parameter:'); ?>:
    <ul style="margin-left: 20px;">
        <li type=square><?php echo _('<code>avg=true</code> overrides the setting for calculating the average rating (can be &quot;true&quot; or &quot;false&quot;)'); ?></li>
    </ul> */
    ?>
</p>