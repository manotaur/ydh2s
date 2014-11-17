<?php while ( have_posts() ) : the_post(); ?>
<div class="single newsletter row">
	<div class="row">
		<div class="col-xs-12 signup">
			<?php if( function_exists( 'mc4wp_form' ) ) { mc4wp_form(); } // Mailchimp for WP plugin ?>
		</div>
	</div> <!-- end .row -->
	
	<div class="outer-head">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>

	<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
		<div class="main col-sm-9 col-xs-12">
			<div class="entry-summary row">
				<?php the_content(); // Event Description ?>
			</div>
			<div class="sharing">
				<div>SHARE</div>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
					<a class="fa fa-facebook fa-stack-1x mediaIcon" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"></a>
				</span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
					<a class="fa fa-twitter fa-stack-1x mediaIcon" target="_blank" href="https://twitter.com/share?text=<?php the_title(); ?>:&url=<?php the_permalink(); ?>"></a>
				</span>
			</div><!-- .sharing -->
		</div>
		<div class="col-sm-3 xs-hide"><?php get_sidebar('newsletter'); ?></div>
	</article><!-- #post-<?php the_ID(); ?> -->

</div><!-- end .single .event .row -->
<?php endwhile; ?>