<article id="post-<?php the_ID(); ?>" class="thumb">
	<header class="">
		<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
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
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>

	</div><!-- .entry-summary -->
	
	<!--
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sscontent' ), 'after' => '</div>' ) ); ?>
	</div> .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
