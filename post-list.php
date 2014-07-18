<article id="post-<?php the_ID(); ?>" class="list">
	<header class="entry-header">
		<h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

		<div class="meta">
			<div class="tags">
				<?php the_tags(); ?>
			</div>
			<div class="venue">
				<?php the_terms( $post->ID, 'venues', '', ', ', ' ' ); ?>
			</div>
			<div class="neighborhood">
				<?php the_terms( $post->ID, 'neighborhood', '', ', ', ' ' ); ?>
			</div>
			<div class="genre">
				<?php the_terms( $post->ID, 'genre', '', ', ', ' ' ); ?>
			</div>
			<div class="price">
				<?php the_terms( $post->ID, 'price', '', ', ', ' ' ); ?>
			</div>
			<div class="djs">
				<?php the_terms( $post->ID, 'djs', '', ', ', ' ' ); ?>
			</div>
			<div class="promoters">
				<?php the_terms( $post->ID, 'promoters', '', ', ', ' ' ); ?>
			</div>
			<div class="days-of-the-week">
				<?php the_terms( $post->ID, 'dayoftheweek', '', ', ', ' ' ); ?>
			</div>
		</div><!-- .meta -->

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<!-- Should we have a blurb? -->
	</div><!-- .entry-summary -->
	
	<p><?php echo "Day of this post: ".get_post_time(l); ?></p>	
</article><!-- #post-<?php the_ID(); ?> -->
