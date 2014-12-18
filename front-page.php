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
			<a href="<?php bloginfo('url'); ?>/featured/"><h3 class="section-heading event-heading row">FEATURED PICKS</h3></a>
			<div class="posts row">
				<?php
					//the $thumbWidth variable is used in post-thumb.php to determine the width of the thumb
					$thumbWidth = ' col-sm-6 col-xs-12';			
					$featargs = array(
						'date_query'        => array(
							array( // Show events less than 6 hours old
								'after' => '-6 hours'
							),
						),
						'category_name' => 'Featured',
						'order' => 'ASC',
						'posts_per_page' => 2
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
			<a href="<?php bloginfo('url'); ?>/pick/"><h3 class="section-heading event-heading row">MORE PICKS</h3></a>
			<div class="posts row">
				<?php
					//the $thumbWidth variable is used in post-thumb.php to determine the width of the thumb
					$thumbWidth = ' col-md-3 col-sm-6 col-xs-12';			
					$pickargs = array(
						'date_query'        => array(
							array( // Show events less than 6 hours old
								'after' => '-6 hours'
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
			<a href="<?php bloginfo('url'); ?>/category/event/"><h3 class="section-heading event-heading row">ALL PARTIES</h3></a>
			<div class="filtering col-xs-12">
				<h4>FILTER</h4>		
			
				<div class="btn-group" id="filter">
					<button type="button" class="btn btn-default active single-filter" data-filter="*">All</button>

					<!-- this displays each taxonomy label and its terms in the Isotope filters(function is in functions.php) -->		
					<?php 
					taxonomy_and_terms_filter('neighborhood');
					taxonomy_and_terms_filter('genre');
					taxonomy_and_terms_filter('venues');
					?>
					<div class="btn-group">				
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Price
						<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">		
       						<li><a href="#" class="single-filter" data-filter=".free2">Free</a></li>
       						<li><a href="#" class="single-filter" data-filter=".tenandunder, .free2">$10 or less</a></li>   
							<li><a href="#" class="single-filter" data-filter=".twentyandunder, .tenandunder, .free2">$20 or less</a></li>
							<li><a href="#" class="single-filter" data-filter=".thirtyandunder, .twentyandunder, .tenandunder, .free2">$30 or less</a></li>
 						</ul>
 					</div>												
				</div><!-- #filter -->
				
				<button type="button" id="all-events" class="btn btn-primary">View All Events</button>
			</div>
			<div class="clearfix"></div>
			<div class="posts-container">
      		<div class="posts row filter-us">
				<?php
					//the $thumbWidth variable is used in post-thumb.php to determine the width of the thumb
					$thumbWidth = ' col-md-3 col-sm-6 col-xs-12';
					$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than 6 hours old (no more than a week upcoming hidden)
								'after' => '-6 hours',
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
