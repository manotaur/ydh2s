<?php while ( have_posts() ) : the_post(); ?>
<div class="single newsletter row">
	<div class="row">
		<div class="col-xs-12 signup">
			<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>
		</div>
	</div> <!-- end .row -->

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
		<div class="main col-xs-9">
			<div class="entry-summary row">
				<?php the_content(); // Event Description ?>
			</div>
		</div>
		<div class="col-xs-3"><?php get_sidebar('newsletter'); ?></div>
	</article><!-- #post-<?php the_ID(); ?> -->

</div><!-- end .single .event .row -->
<?php endwhile; ?>