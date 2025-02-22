<?php
/**
 * The template for displaying Archive pages.
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		 * Queue the first post, that way we know
		 * what date we're dealing with (if that is the case).
		 *
		 * We reset this later so we can run the loop
		 * properly with a call to rewind_posts().
		 */
		if ( have_posts() ) {
			the_post();
		}
		?>

		<h1 class="page-title">
			<?php if ( is_day() ) : ?>
				<?php printf( esc_html__( 'Daily Archives: %s', 'supportte' ), '<span>' . get_the_date() . '</span>' ); ?>
			<?php elseif ( is_month() ) : ?>
				<?php printf( esc_html__( 'Monthly Archives: %s', 'supportte' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'supportte' ) ) . '</span>' ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php printf( esc_html__( 'Yearly Archives: %s', 'supportte' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'supportte' ) ) . '</span>' ); ?>
			<?php else : ?>
				<?php esc_html_e( 'Blog Archives', 'supportte' ); ?>
			<?php endif; ?>
		</h1>
		<?php

		/**
		 * Since we called the_post() above, we need to
		 * rewind the loop back to the beginning that way
		 * we can run the loop properly, in full.
		 */
		rewind_posts();

		/**
		 * Run the loop for the archives page to output the posts.
		 * If you want to overload this in a child theme then include a file
		 * called loop-archive.php and that will be used instead.
		 */
		get_template_part( 'loop', 'archive' );

		?>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
