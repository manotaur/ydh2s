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

//this function creates custom excerpt lengths. See: https://wordpress.org/support/topic/two-different-excerpt-lengths
function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

//this displays each taxonomy label and its terms (see get_taxonomy and get_terms in WP codex)
function taxonomy_and_terms($taxonomy_name){
	$taxonomy = get_taxonomy($taxonomy_name);
    echo '<h3>' . $taxonomy->label . '</h3>';
    $terms = get_terms($taxonomy->name, array( 'hide_empty' => 0));
    //foreach ($terms as $term) {
    //	echo $term->name;	    			
    //}
 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
     	echo "<ul>";
     	foreach ( $terms as $term ) {
       	echo "<li><a href='" . get_term_link($term,$terms) . "'>" . $term->name . "</a></li>";    
     	}
     	echo "</ul>";
 	}			
}

function terms_only($taxonomy_name){
	$taxonomy = get_taxonomy($taxonomy_name);
    $terms = get_terms($taxonomy->name, array( 'hide_empty' => 0));
 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
     	echo "<ul>";
     	foreach ( $terms as $term ) {
       	echo "<li><a href='" . get_term_link($term,$terms) . "'>" . $term->name . "</a></li>";    
     	}
     	echo "</ul>";
 	}			
}

//this displays each taxonomy label and its terms in the Isotope filters(see get_taxonomy and get_terms in WP codex) -->		
function taxonomy_and_terms_filter($taxonomy_name){
	echo '<div class="btn-group">';				
	$taxonomy = get_taxonomy($taxonomy_name);
	
	//create dropdown menu for each taxonomy
	echo '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">' 
		. $taxonomy->label . '<span class="caret"></span></button>';
	echo '<ul class="dropdown-menu" role="menu">';
	
	//get the terms for the current taxonomy					
    $terms = get_terms($taxonomy->name);
 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
 		//loop through each term in the taxonomy
     	foreach ( $terms as $term ) {
     		//add a filter menu item for the term
     		$filter = '.' . preg_replace("/[^A-Za-z0-9 ]/", '', $term->slug);							
       		echo '<li><a href="#" class="single-filter" data-filter="' . $filter . '">' . $term->name . '</a></li>';
		}
 	}
 	echo '</ul>';
 	echo '</div>';			
}

?>