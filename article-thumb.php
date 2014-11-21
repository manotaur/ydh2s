<article id="post-<?php the_ID(); ?>" class="thumb <?php echo $post_terms ?> col-xs-12">	
	<div class="image article-image col-sm-4"> <!-- the thumb image disappears on mobile & small tablet, so no need for a col-xs class -->
		<?php echo get_the_post_thumbnail($page->ID, 'article-homepage-thumb'); ?>
		<div class="clearfix"></div>
	</div>
	
	<div class="article-info col-xs-12 col-sm-8"> <!--.article-info is the same as .entry-info, but without the black background -->
		<div class="headline">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<h5><?php the_author_link(); ?>, <?php the_date(); ?></h5>
		</div><!-- .headline -->

		<div class="entry-desc">
			<?php
			// this variable is assigned to a "read more" link & is passed into the custom excerpt function: 
			$readMore = ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
			custom_excerpt(160, $readMore); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-desc -->
		
		<div class="meta">
			<!-- Tags only, since this is an article post -->
			<div class="tags">
				<?php the_tags("",""); ?>
			</div>
		</div><!-- .meta -->
		<div class="clearfix"></div>
	</div><!-- .col -->
	
	<!--
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sscontent' ), 'after' => '</div>' ) ); ?>
	</div> .entry-content -->
	
	<div class="clearfix"></div>
</article><!-- #post-<?php the_ID(); ?> -->
