<?php
/*
Template Name: Homepage
*/
	add_theme_support('post-thumbnails');
	get_header(); ?>

<div id="home" class="container">
	<div class="row">
		<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>

	</div> <!-- end .row -->

	<div class="front-content row">
		<div class="col-xs-12 featured"><!-- Featured Events -->
			<h3 class="section-heading event-heading row">FEATURED EVENTS</h3>
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
					query_posts($featargs);
					if (have_posts()) :
						while (have_posts()) : the_post();
							include 'post-thumb.php'; // Post a thumbnail of the event
						endwhile;
					endif; 
				?>
				<div class="clearfix"></div>
			</div><!-- end .posts -->
		</div><!-- end .featured -->
		<div class="col-xs-12 picks"><!-- Featured Events -->
			<h3 class="section-heading event-heading row">OUR PICKS</h3>
			<div class="posts row">
				<?php			
					$featargs = array(
						'date_query'        => array(
							array( // Show events less than a day old
								'after' => '-23 hours'
							),
						),
						'category_name' => 'Pick',
						'order' => 'ASC',
						'posts_per_page' => 3
					);
					query_posts($featargs);
					if (have_posts()) :
						while (have_posts()) : the_post();
							include 'post-thumb.php'; // Post a thumbnail of the event
						endwhile;
					endif; 
				?>
				<div class="clearfix"></div>
			</div><!-- end .posts -->
		</div><!-- end .picks -->

		<div class="col-xs-12 events"><!-- All the week's events -->
			<h3 class="section-heading event-heading row">MORE EVENTS</h3>
			<?php // echo "Today is ".date(l); ?>
			<div class="filtering col-xs-12">
				<h4>FILTER</h4>
				<!-- Old filters
				<div class="btn-group" id="filter">
					<button type="button" class="btn btn-default active" data-filter="*">All</button>
					<button type="button" class="btn btn-default" data-filter=".Williamsburg">Williamsburg</button>
					<button type="button" class="btn btn-default" data-filter=".Bushwick">Bushwick</button>
					<button type="button" class="btn btn-default" data-filter=".electro">Electro</button>
					<button type="button" class="btn btn-default" data-filter=".indie">Indie</button>
					<button type="button" class="btn btn-default" data-filter=".Free">Free</button>
				</div>-->			
			
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
     							$filter = explode(" ", $term->name); //creates an array, each word in taxonomy name is an item in the array
       							echo '<li><a href="#" data-filter=".' . $filter[0] . '">' . $term->name . '</a></li>';    
     						}
 						}
 						echo '</ul>';
 						echo '</div>';			
					}
					taxonomy_and_terms_filter('neighborhood');
					taxonomy_and_terms_filter('genre');
					taxonomy_and_terms_filter('venues');
					taxonomy_and_terms_filter('price');
					?>	
						
				</div><!-- #filter -->
				
				<button type="button" id="all-events" class="btn btn-primary">All Events</button>
			</div>
			<div class="clearfix"></div>
      		<div class="posts row filter-us">
				<?php
					$eventArgs = array(
						'date_query'        => array(
							array( // Show events less than a day old, no more than a week upcoming
								'after' => '-23 hours',
								'before' => '+1 week'
							),
						),
						'category_name' => 'Event',
						'order' => 'ASC',
						'posts_per_page' => 6
					);
					query_posts($eventArgs);
					if (have_posts()) :
						while (have_posts()) : the_post();
							include 'post-thumb.php'; // Post thumbnail
						endwhile;
					endif; ?>
			</div><!-- end .posts -->
		</div><!-- end .events -->
								
		<div class="row editorial">
			<h3 class="section-heading row">ARTICLES</h3>
			<div class="posts row">
				<?php 
					$editargs = array(
						'category_name' => 'Editorial',
						'posts_per_page' => 2
					);
					query_posts($editargs);
					if (have_posts()) :
						while (have_posts()) : the_post();
							include 'article-thumb.php';
						endwhile;
					endif; ?>
				
			</div><!-- .posts -->
		<h3><a href="http://localhost/ydh2s.com/category/editorial/">See More Articles</a></h3>
		</div><!-- end .editorial -->
				
	</div><!-- end .front-content -->
			
</div><!-- end .container -->
	<?php get_footer(); ?>	
</body>
</html>
