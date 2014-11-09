<?php include('tax-terms.php')  // Adds taxonomy class names to the post, via the $post_terms variable ?>
<article id="post-<?php the_ID(); ?>" class="newsthumb <?php echo $post_terms ?>">	

<div class="entry-info-wrap">
	<div class="entry-info">
		<h3><?php the_title(); ?></h3>
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
	
	</div><!-- .entry-info -->
</div><!-- .entry-info-wrap -->

</article><!-- #post -->
