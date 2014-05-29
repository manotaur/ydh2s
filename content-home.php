<?php
/**
 * @package sscontent
 * @since sscontent 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<span class="cat-links">
				<?php the_category(); ?>
			</span>
			<span class="tag-links">
				<?php the_tags(); ?>
			</span>
		
			<?php edit_post_link( __( 'Edit', 'sscontent' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
		</div><!-- #entry-meta -->

		</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sscontent' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
