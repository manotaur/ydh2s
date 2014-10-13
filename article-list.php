<article id="post-<?php the_ID(); ?>" class="list row">
	<div class="flyer col-xs-3">
		<?php echo get_the_post_thumbnail($page->ID, 'list'); ?>
	</div>
	<div class="main col-xs-9">
		<header class="entry-header">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			
			<h5><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('F j'); ?></h5>	
		</header><!-- .entry-header -->
		
		<div class="entry-summary row">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		</div><!-- .entry-summary -->
		<div class="meta">
			<!-- Tags only, since this is an article post -->
			<div class="tags">
				<?php the_tags("",""); ?>
			</div>
		</div><!-- .meta -->
	</div><!-- .main -->
</article><!-- #post-<?php the_ID(); ?> -->