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
				$today = getdate();
				$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than a day old
								'after' => '-1 day'
							),
						),
					'category_name' => 'Event',
					'order' => 'ASC'
				);
				query_posts($eventArgs);
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						include 'post-list.php'; // Post Listing
					endwhile;

				else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
		</div>		
		<div class="col-xs-2"><?php get_sidebar(); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->
</div><!-- #events -->
</section><!-- #primary .site-content -->

<?php get_footer(); ?>