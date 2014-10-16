<?php while ( have_posts() ) : the_post(); ?>
	<div class="single article row">

		<h1 class="entry-title"><?php the_title(); ?></h1>

		<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
			<div class="main col-xs-9">
				<div class="entry-summary row">
					<?php the_content(); // Event Description ?>
				</div>
			</div>
			<div class="col-xs-3"><?php get_sidebar('article'); ?></div>
		</article><!-- end article -->

	</div><!-- end .single .event .row -->
<?php endwhile; ?>