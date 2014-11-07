<article id="post-<?php the_ID(); ?>" class="thumb <?php echo $post_terms ?> col-xs-12">	
	<div class="image col-xs-4">
		<?php echo get_the_post_thumbnail($page->ID, 'article-homepage-thumb'); ?>
		<div class="clearfix"></div>
	</div>
	
	<div class="article-info col-xs-8"> <!--.article-info is the same as .entry-info, but without the black background -->
		<div class="headline">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<h5><?php the_author_link(); ?>, <?php the_date(); ?></h5>
		</div><!-- .headline -->

		<div class="entry-desc">
			<?php the_excerpt(); ?>
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
