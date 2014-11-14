<?php 
	add_theme_support('post-thumbnails');
	add_image_size( 'category-thumb', 500, 350, array( 'center', 'center' ) );
	add_image_size( 'list', 285, 285, array( 'center', 'center' ) );
	add_image_size( 'article-homepage-thumb', 350, 350, array( 'center', 'center' ) );
	add_image_size( 'flyer', 600, 600, array( 'center', 'center' ) );
	add_image_size( 'modal', 1000, 600);
	
	
	function include_category( $query ) {
		if ( $query->is_main_query() && ! is_admin() ) { // Only modify the main loop query on the front end
			if ( is_date() ) { // Only modify date-based archives
				$query->set( 'cat', '3' ); // Only show Event posts (category 3)
			}
		}
	}
	add_action( 'pre_get_posts', 'include_category' );

//this function creates custom excerpt lengths, adapted from code @ https://wordpress.org/support/topic/two-different-excerpt-lengths
function custom_excerpt($new_length = 20, $new_more) {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  
  //this adds a "read more" link to the excerpt of event and article descriptions (see WP codex on the_excerpt())
  add_filter('excerpt_more', function () use ($new_more) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
  });
  
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}
?>