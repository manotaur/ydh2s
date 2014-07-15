<?php
/**
 * Default displayed content. This page only will display featured posts.
 * The code for date sensitive content is in sidebar.php
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php sscontent_content_nav( 'nav-above' ); ?>
				
				<?php query_posts('cat=-3'); ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'home' );
					?>

				<?php endwhile; ?>

				<?php sscontent_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>BARF
<?php get_footer(); ?>