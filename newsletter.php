<?php
/*
Template Name: Newsletter
*/
add_theme_support('post-thumbnails');
get_header(); ?>
<div class="container listing">
	<div class="row">
		<div class="col-xs-12 signup">
			<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>
		</div>
	</div> <!-- end .row -->
	<h1 class="page-title">Newsletters</h1>
	
	<?php if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif; ?>
			
	<div class="front-content">
		<div class="col-sm-9 col-xs-12">
	
			<?php $newsargs = array(
				'category_name' => 'newsletter',
				'posts_per_page' => 1
				);
				$the_query = new WP_Query($newsargs);
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					include 'newsletter-thumb.php';
				} ?>
			
		</div><!-- .col-xs-12 -->		
		<div class="col-sm-3 xs-hide"><?php get_sidebar('newsletter'); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->
</div><!-- #container -->
</section><!-- #primary .site-content -->


<?php get_footer(); ?>