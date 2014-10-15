
<?php
/**
 * The template for displaying taxonomy-related archive pages. It will only display posts in the event category
 */
add_theme_support('post-thumbnails');
get_header(); ?>

<div id="taxonomy" class="container listing">
	<?php if ( have_posts() ) : ?>
		<header class="page-header row">
			<h1 class="page-title">
				<?php $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
					echo $the_tax->labels->name; // Get & display the section title ?> &gt;
				<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
					echo $term->name; // Get & display the section term  ?>
			</h1>
		</header>
		
		<div class="front-content">
			<div class="col-xs-10 list">
				<?php
					$taxonomy = $the_tax->labels->name;
					$taxonomy = strtolower($taxonomy);
					$slug= $term->slug;
					$taxArgs = array(
						'date_query' => array(
							array( // Show events less than a day old
								'after' => '-1 day'
							),
						),
						'category_name' => 'Event',
						'order' => 'ASC',
						$taxonomy => $slug
					);
					$the_query = new WP_Query($taxArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-list.php'; 
					} ?>
				<div class="next-prev"><p><?php posts_nav_link(); ?></p></div>
	<?php else : ?>
		<div class="front-content">
			<div class="col-xs-10 list">
				<?php _e('<p>Sorry, no posts matched your criteria</p>');
	endif; ?>
			</div>		
			<div class="col-xs-2"><?php get_sidebar(); ?></div>
			<div class="clearfix"></div>
		</div><!-- .front-content -->
</div><!-- #taxonomy -->

<?php get_footer(); ?>