<?php
$venues = get_the_terms( $post->ID, 'venues' );
$nabes = get_the_terms( $post->ID, 'neighborhood' );
$genres = get_the_terms( $post->ID, 'genre' );
$price = get_the_terms( $post->ID, 'price' );
$djs = get_the_terms( $post->ID, 'djs' );
$promoters = get_the_terms( $post->ID, 'promoters' );
$day = get_the_terms( $post->ID, 'daysoftheweek' );
if ( $venues && ! is_wp_error( $venues ) ) :
	$tax_terms = array();
	foreach ($venues as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms = join( " ", $tax_terms );
endif;
if ( $nabes && ! is_wp_error( $nabes ) ) :
	$tax_terms = array();
	foreach ($nabes as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
if ( $genres && ! is_wp_error( $genres ) ) :
	$tax_terms = array();
	foreach ($genres as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
if ( $price && ! is_wp_error( $price ) ) :
	$tax_terms = array();
	foreach ($price as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
if ( $djs && ! is_wp_error( $djs ) ) :
	$tax_terms = array();
	foreach ($djs as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
if ( $promoters && ! is_wp_error( $promoters ) ) :
	$tax_terms = array();
	foreach ($promoters as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
if ( $day && ! is_wp_error( $day ) ) :
	$tax_terms = array();
	foreach ($day as $term) {
		$tax_terms[] = $term->name;
	}
	$post_terms .= " " . join( " ", $tax_terms );
endif;
?>

