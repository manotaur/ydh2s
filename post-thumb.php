<?php include('tax-terms.php')  // Adds taxonomy class names to the post, via the $post_terms variable ?>
<article id="post-<?php the_ID(); ?>" class="thumb <?php echo $post_terms ?> col-xs-4">	
	<div class="flyer"><?php echo get_the_post_thumbnail($page->ID, 'category-thumb'); ?></div>
	
	<div class="entry-info-wrap"><div class="entry-info">
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<h5><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('F j'); ?></h5>

		<div class="entry-desc event-desc">
			<?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-desc -->
		
		<div class="entry-details row">
			<div class="loc col-xs-5">
				<h6>Location</h6>
				<?php the_terms( $post->ID, 'venues') ?>
			</div>
			<div class="nabe col-xs-7">
				<h6>Neighborhood</h6>
				<?php the_terms( $post->ID, 'neighborhood') ?>
			</div>
			<div class="dj col-xs-12">
				<h6>Music by</h6>
				<?php the_terms( $post->ID, 'djs') ?>
			</div>
		</div><!-- end .entry-details -->
		
		<div class="meta">
			<!-- I don't know that we need tags anymore now that we're using taxonomies, but here's the code
			<div class="tags">
				<?php the_tags(); ?>
			</div>
			-->
			<div class="venue">
				<?php the_terms( $post->ID, 'venues', '', '', ''); ?>
			</div>
			<div class="neighborhood">
				<?php the_terms( $post->ID, 'neighborhood', '', '', ''); ?>
			</div>
			<div class="genre">
				<?php the_terms( $post->ID, 'genre', '', '', ''); ?>
			</div>
			<div class="price">
				<?php the_terms( $post->ID, 'price', '', '', ''); ?>
			</div>
			<div class="djs">
				<?php the_terms( $post->ID, 'djs', '', '', ''); ?>
			</div>
			<div class="promoters">
				<?php the_terms( $post->ID, 'promoters', '', '', ''); ?>
			</div>
			<div class="days-of-the-week">
				<?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?>
			</div>
			<div class="clearfix"></div>
		</div><!-- .meta -->
		
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
		</div>
	</div></div><!-- .entry-info -->
	
	<!--
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sscontent' ), 'after' => '</div>' ) ); ?>
	</div> .entry-content -->

</article><!-- #post -->
