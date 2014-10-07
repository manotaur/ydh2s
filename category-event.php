<?php
/*
  The template for displaying posts from the events category, i.e. all event listings
 */
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="events" class="container listing">
	<h1 class="page-title">Events</h1>

	<div class="front-content">
		<div class="col-xs-10 list">
			<?php 
				$eventArgs = array(
					'post_status' => 'future,publish',
					'category_name' => 'Event',
					'posts_per_page' => 10
				);
				query_posts($eventArgs);
			?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php include 'post-list.php'; ?>
				<?php endwhile; ?>

				<?php else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
		</div>		
		<div class="col-xs-2"><?php get_sidebar(); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->
</div><!-- #events -->
</section><!-- #primary .site-content -->

<?php get_footer(); ?>