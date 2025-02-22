<?php
/**
 * The Template for displaying all single posts.
 *
 * @package     Supportte
 * @author      SVL Studios
 * @copyright   Copyright (c) 2021, SVL Studios
 * @link        https://www.svlstudios.com
 * @access      https://github.com/svl-studios/supportte
 * @since       Supportte 1.0.0
 */

get_header(); ?>

<div id="container">
	<div id="content" role="main">
		<?php

		/**
		 * Run the loop to output the post.
		 * If you want to overload this in a child theme then include a file
		 * called loop-single.php and that will be used instead.
		 */
		get_template_part( 'loop', 'single' );

		?>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
