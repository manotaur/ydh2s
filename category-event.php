<?php
/*
  The template for displaying posts from the events category, i.e. all event listings
 */
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="events" class="container listing">
	<div class="outer-head">
		<h1 class="page-title">Events</h1>
	</div>

	<div class="front-content">
		<div class="col-sm-10 col-xs-12 listed">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$today = getdate();
				$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than 6 hours old
								'after' => '-6 hours'
							),
						),
					'category_name' => 'Event',
					'order' => 'ASC',
					'paged' => $paged
				);
					$the_query = new WP_Query($eventArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-list.php'; 
					} ?>
			<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
		</div>		
		<div class="col-sm-2 xs-hide"><?php get_sidebar(); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->
</div><!-- #events -->
</section><!-- #primary .site-content -->

<?php get_footer(); ?>