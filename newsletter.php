<?php
/*
Template Name: Newsletter
*/
add_theme_support('post-thumbnails');
get_header(); ?>

<header class="page-header">
	<h1 class="page-title">
		Newsletters
	</h1>
</header>

	<div id="content" class="newsletter">
	
	<?php $newsargs = array(
			'category_name' => 'newsletter',
			'posts_per_page' => 1
			);
			query_posts($newsargs); ?>

			<?php if ( have_posts() ) : ?>



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