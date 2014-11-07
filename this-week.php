<?php
/*
Template Name: This Week
*/
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="taxonomy" class="container listing">

<?php if ( have_posts() ) : ?>
		<header class="page-header row">
			<h1 class="page-title">This Week's Events</h1>
		</header>
		<?php rewind_posts(); ?>
		
		<div class="front-content">
			<div class="col-xs-10 list">
			<?php
				$today = getdate();
				$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than a day old but no further than 1 week into the future
								'after' => '-1 day',
								'before' => '+7 days'
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
					<p><?php _e('Sorry, no events this week.'); ?>, guy</p>
			<?php endif; ?>
				<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
	<?php else : ?>
		<div class="front-content">
			<div class="col-sm-10 col-xs-12 list">
				<?php _e('<p>Sorry, no posts matched your criteria</p>');
	endif; ?>
			</div>		
			<div class="col-sm-2 xs-hide"><?php get_sidebar(); ?></div>
			<div class="clearfix"></div>
		</div><!-- .front-content -->
</div><!-- #taxonomy -->

<?php get_footer(); ?>
