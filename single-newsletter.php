<?php
add_theme_support('post-thumbnails');
get_header(); ?>
<div class="container listing">

	<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>

	<h1 class="page-title">Newsletters</h1>
	<div class="front-content">
		<div class="col-xs-10">
	
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>		
			<?php include 'newsletter-thumb.php'; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
			
		</div><!-- .col-xs-10 -->		
		<div class="col-xs-2"><?php get_sidebar('newsletter'); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->
</div><!-- #container -->
</section><!-- #primary .site-content -->


<?php get_footer(); ?>