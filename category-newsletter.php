<?php
/**
 * The template for displaying posts from the edditorial category, i.e. all blog posts
 */
add_theme_support('post-thumbnails');
get_header(); ?>

	<div id="content" class="newsletter">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						Newsletters
					</h1>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php include 'post-thumb.php'; ?>

				<?php endwhile; ?>

			<?php else : ?>

				<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>