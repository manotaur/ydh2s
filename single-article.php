<?php while ( have_posts() ) : the_post(); ?>
	<div class="single article row">

		<h1 class="entry-title"><?php the_title(); ?></h2>
		<h4 class="entry-author">by <?php the_author(); ?></h4>

		<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
			<div class="main col-sm-9 col-xs-12">
				<div class="entry-summary row">
					<?php the_content(); // Event Description ?>
				</div>
			</div>
			<div class="col-sm-3 xs-hide"><?php get_sidebar('article'); ?></div>
		</article><!-- end article -->

	</div><!-- end .single .event .row -->
<?php endwhile; ?>