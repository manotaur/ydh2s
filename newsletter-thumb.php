<?php include('tax-terms.php')  // Adds taxonomy class names to the post, via the $post_terms variable ?>
<article id="post-<?php the_ID(); ?>" class="thumb <?php echo $post_terms ?> col-xs-4">	

<div class="entry-info-wrap">
	<div class="entry-info">	

<!-- don't need the following for the newsletter page:

		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<h5><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('F j'); ?></h5> 
				
-->
<!-- don't need title, since it's already in the content
		<?php the_title(); ?>  -->
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>
	
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

	<!--
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sscontent' ), 'after' => '</div>' ) ); ?>
	</div> .entry-content -->
	
	</div><!-- .entry-info -->
</div><!-- .entry-info-wrap -->

</article><!-- #post -->
