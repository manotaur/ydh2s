<?php
/*
Template Name: Homepage
*/
	add_theme_support('post-thumbnails');
	get_header(); ?>

<div id="home" class="container">
	<div class="row">
		<div class="col-xs-12 signup">
			<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>
		</div>
	</div> <!-- end .row -->

	<div class="front-content row">
		<div class="col-xs-12 featured"><!-- Featured Events -->
			<a href="<?php bloginfo('url'); ?>/featured/"><h3 class="section-heading event-heading row">FEATURED EVENTS</h3></a>
			<div class="posts row">
				<?php			
					$featargs = array(
						'date_query'        => array(
							array( // Show events less than a day old
								'after' => '-23 hours'
							),
						),
						'category_name' => 'Featured',
						'order' => 'ASC',
						'posts_per_page' => 3
					);
					$the_query = new WP_Query($featargs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-thumb.php'; // Post a thumbnail of the event
					} ?>
				<div class="clearfix"></div>
			</div><!-- end .posts -->
		</div><!-- end .featured -->
		<div class="col-xs-12 picks"><!-- Featured Events -->
			<a href="<?php bloginfo('url'); ?>/pick/"><h3 class="section-heading event-heading row">OUR PICKS</h3></a>
			<div class="posts row">
				<?php			
					$pickargs = array(
						'date_query'        => array(
							array( // Show events less than a day old
								'after' => '-23 hours'
							),
						),
						'category_name' => 'Pick',
						'order' => 'ASC',
						'posts_per_page' => 4
					);
					$the_query = new WP_Query($pickargs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-thumb.php'; // Post a thumbnail of the event
					} ?>
				<div class="clearfix"></div>
			</div><!-- end .posts -->
		</div><!-- end .picks -->

		<div class="col-xs-12 events"><!-- All the week's events -->
			<a href="<?php bloginfo('url'); ?>/category/event/"><h3 class="section-heading event-heading row">MORE EVENTS</h3></a>
			<div class="filtering col-xs-12">
				<h4>FILTER</h4>		
			
				<div class="btn-group" id="filter">
					<button type="button" class="btn btn-default active">
						<a href="#" data-filter="*">All</a></button>

					<!-- this displays each taxonomy label and its terms in the Isotope filters(see get_taxonomy and get_terms in WP codex) -->		
					<?php 
					function taxonomy_and_terms_filter($taxonomy_name){
						echo '<div class="btn-group">';				
						$taxonomy = get_taxonomy($taxonomy_name);
						echo '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">' 
							. $taxonomy->label . '<span class="caret"></span></button>';
						echo '<ul class="dropdown-menu" role="menu">';
						
    					$terms = get_terms($taxonomy->name);
 						if ( !empty( $terms ) && !is_wp_error( $terms ) ){
     						foreach ( $terms as $term ) {
     							$filter = '.' . preg_replace("/[^A-Za-z0-9 ]/", '', $term->slug);							
       							echo '<li><a href="#" data-filter="' . $filter . '">' . $term->name . '</a></li>';   
     						}
 						}
 						echo '</ul>';
 						echo '</div>';			
					}
					taxonomy_and_terms_filter('neighborhood');
					taxonomy_and_terms_filter('genre');
					taxonomy_and_terms_filter('venues');
					?>					
					<div class="btn-group">				
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Price
						<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">		
       						<li><a href="#" data-filter=".free2">Free</a></li>
       						<li><a href="#" data-filter=".tenandunder, .free2">$10 or less</a></li>   
							<li><a href="#" data-filter=".twentyandunder, .tenandunder, .free2">$20 or less</a></li>
							<li><a href="#" data-filter=".thirtyandunder, .twentyandunder, .tenandunder, .free2">$30 or less</a></li>
 						</ul>
 					</div>												
				</div><!-- #filter -->
				
				<button type="button" id="all-events" class="btn btn-primary">All Events</button>
			</div>
			<div class="clearfix"></div>
			<div class="posts-container">
      		<div class="posts row filter-us">
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
						'posts_per_page' => 32
					);
					$the_query = new WP_Query($eventArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-thumb.php'; // Post a thumbnail of the event
					} ?>
      		</div><!-- end .posts -->
			</div><!-- end .posts-container -->
		</div><!-- end .events -->
								
		<div class="row editorial">
			<h3 class="section-heading row">ARTICLES</h3>
			<div class="posts row">
				<?php 
					$editargs = array(
						'category_name' => 'Editorial',
						'posts_per_page' => 2
					);
					$the_query = new WP_Query($editargs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'article-thumb.php'; // Post a thumbnail of the article
					} ?>
				
			</div><!-- .posts -->
		<h3><a href="/category/editorial/">See More Articles</a></h3>
		</div><!-- end .editorial -->
				
	</div><!-- end .front-content -->
			
</div><!-- end .container -->
	<?php get_footer(); ?>	
</body>
</html>
