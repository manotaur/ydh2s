
<?php
/**
 * The template for displaying taxonomy-related archive pages. It will only display posts in the event category
 */
add_theme_support('post-thumbnails');
get_header(); ?>

<div id="taxonomy" class="container listing">
	<?php if ( have_posts() ) : ?>
		<div class="outer-head">
			<h1 class="page-title">
				<?php $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
					$taxonomy = $the_tax->labels->name;
					if (is_tax('genre')) { // if this is a genre, removes the "s" from the name so that it filters
						$taxonomy = rtrim($taxonomy, "s");
					}
					echo $taxonomy // Get & display the section title ?> &gt;
				<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
					echo $term->name; // Get & display the section term  ?>
			</h1>
		</div>
		
		<div class="front-content">
			<div class="col-sm-10 col-xs-12 listed">
				<?php
					$taxonomy = strtolower($taxonomy);
					$slug = $term->slug;
					$taxArgs = array(
						'date_query' => array(
							array( // Show events less than 6 hours old
								'after' => '-6 hours'
							),
						),
						'category_name' => 'Event',
						'order' => 'ASC',
						$taxonomy => $slug
					);
					$the_query = new WP_Query($taxArgs);
					$counter = 0;
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-list.php'; 
						$counter++; // counts the number of posts. if it's 0, the no-events-message is shown
					} ?>
					
					<?php if ($counter == 0) {
						echo '<div class="no-events-message">Sorry, there are no upcoming events in this genre.</div>';
						}
					?>
					
				<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
	<?php else : ?>
		<div class="front-content">
			<div class="col-sm-10 col-xs-12 listed">
				<?php _e('<p>Sorry, no posts matched your criteria</p>');
	endif; ?>
			</div>		
			<div class="col-sm-2 xs-hide"><?php get_sidebar(); ?></div>
			<div class="clearfix"></div>
		</div><!-- .front-content -->
</div><!-- #taxonomy -->

<?php get_footer(); ?>