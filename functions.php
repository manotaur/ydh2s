<?php 
	add_theme_support('post-thumbnails');
	add_image_size( 'category-thumb', 500, 350, array( 'center', 'center' ) );
	add_image_size( 'list', 250, 250, array( 'center', 'center' ) );
	add_image_size( 'article-homepage-thumb', 350, 350, array( 'center', 'center' ) );
	add_image_size( 'flyer', 600, 600, array( 'center', 'center' ) );
	
	
	function include_category( $query ) {
		if ( $query->is_main_query() && ! is_admin() ) { // Only modify the main loop query on the front end
			if ( is_date() ) { // Only modify date-based archives
				$query->set( 'cat', '3' ); // Only show Event posts (category 3)
			}
		}
	}
	add_action( 'pre_get_posts', 'include_category' );
?>