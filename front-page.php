<?php
/**
 * DYNAMIC PAGE THAT INCLUDES ALL TEMPLATES WITH AN OPTION TO REORDER ALL PARTS
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php

				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php _rappid_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>