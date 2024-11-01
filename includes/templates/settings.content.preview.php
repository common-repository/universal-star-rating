<?php
/**
 * Template file for USR preview
 *
 * @author Chasil
 * @author Mike Wigge <info@universal-star-rating.de>
 *
 * @since 2.0
 * @version 1.3
 */
?>

<?php
//for table tr bgcolor
$bright = 1;
?>

<table class="usr">
    <tr>
        <th><?php esc_html_e('Example','universal-star-rating'); ?></th>
        <th><?php esc_html_e('Result','universal-star-rating'); ?></th>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5)); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>[usrlist Pizza:3 &quot;Ice Cream:3.5&quot; Dirt]</td>
        <td>
			<?php echo insertMultiRating(
				array('Pizza:3',
					'Ice Cream:3.5',
					'Dirt')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 img=&quot;03.png&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'img' => '03.png')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;false&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'false')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;true&quot; textmod=&quot;false&quot; textsize=&quot;25&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'true',
				    'textmod' => 'false',
				    'textsize' => '25')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;true&quot; textmod=&quot;true&quot; textsize=&quot;20&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'true',
				    'textmod' => 'true',
				    'textsize' => '20')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;true&quot; tooltip=&quot;true&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'true',
					'tooltip' => 'true')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;true&quot; tooltip=&quot;false&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'true',
					'tooltip' => 'false')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 text=&quot;false&quot; tooltip=&quot;true&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'text' => 'false',
					'tooltip' => 'true')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 max=&quot;3&quot;]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'max' => 3)); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 size=20]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'size' => 20)); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Movie: [usr 3.5 max=&quot;3&quot; text=&quot;false&quot; img=&quot;03.png&quot; size=20]</td>
        <td>
            Movie: <?php echo insertSingleRating(
				array(3.5,
					'max' => 3,
					'text' => 'false',
					'img' => '03.png',
					'size' => 20)); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Steak: [usr 3.5 max=&quot;3&quot; img=&quot;07.png&quot; size=20 text=&quot;true&quot; addtext=&quot;Piggy-Points&quot;]</td>
        <td>
            Steak: <?php echo insertSingleRating(
				array(3.5,
					'max' => 3,
					'text' => 'true',
					'img' => '07.png',
					'size' => 20,
					'addtext' => 'Piggy-Points')); ?>
        </td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>[usrlist Pizza:4 &quot;Ice Cream:3.5&quot; Aspargus avg=&quot;true&quot;]</td>
        <td><?php echo insertMultiRating(
				array('Pizza:4',
					'Ice Cream:3.5',
					'Aspargus',
					'avg' => 'true')); ?></td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>[usrlist Pizza:4 &quot;Ice Cream:3.5&quot; Aspargus textmod=&quot;true&quot; textsize=&quot;20&quot;]</td>
        <td><?php echo insertMultiRating(
				array('Pizza:4',
					'Ice Cream:3.5',
					'Aspargus',
					'textmod' => 'true',
				    'textsize' => '20')); ?></td>
    </tr>
    <tr <?php if(($bright % 2) == 1){echo 'class="bright"';} $bright++; ?>>
        <td>Steak: [usr 3.5 img=&quot;07.png&quot; size=20 text=&quot;true&quot; tooltip=&quot;true&quot; addtext=&quot;Piggy-Points in Tooltip&quot;]</td>
        <td>Steak: <?php echo insertSingleRating(
				array(3.5,
					'img' => '07.png',
					'size' => 20,
					'text' => 'true',
					'tooltip' => 'true',
					'addtext' => 'Piggy-Points in Tooltip')); ?></td>
    </tr>
</table>