<?php while ( have_posts() ) : the_post(); ?>
	<div class="single article row">
		
		<div class="outer-head">
			<h1 class="entry-title"><?php the_title(); ?></h2>
			<h4 class="entry-author">by <?php the_author(); ?></h4>
		</div>

		<article id="post-<?php the_ID(); ?>" class="front-content col-xs-12">
			<div class="main col-sm-9 col-xs-12">
				<div class="entry-summary row">
					<?php the_content(); // Event Description ?>
					<div class="meta">
						<!-- Tags only, since this is an article post -->
						<div class="tags">
							<?php the_tags("",""); ?>
						</div><!-- .tags -->
					</div><!-- .meta -->
				</div><!-- .entry-summary -->
			</div><!-- .main -->
			<div class="col-sm-3 xs-hide"><?php get_sidebar('article'); ?></div>
		</article><!-- end article -->

	</div><!-- end .single .event .row -->
<?php endwhile; ?>