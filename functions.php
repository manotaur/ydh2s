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
	
	//this shortens event description excerpts to 20 words on the homepage:
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>