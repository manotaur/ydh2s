<?php
/*
Template Name: Event Listing
*/
	add_theme_support('post-thumbnails');
?>
<?php get_header(); ?>

<div class="event-list">
				<?php
					$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than a day old (no more than a week upcoming hidden)
								'after' => '-23 hours',
								//'before' => '+1 week'
							),
						),
						'category_name' => 'Event',
						'order' => 'ASC',
						'posts_per_page' => 6
					);
					$the_query = new WP_Query($eventArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-thumb.php'; // Post a thumbnail of the event
					} ?>
</div>

<?php get_footer(); ?>