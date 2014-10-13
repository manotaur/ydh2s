<?php
/**
 * The template for displaying posts from the edditorial category, i.e. all blog posts
 */
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="content" class="container editorial listing">
	<h1 class="page-title">Articles</h1>
	
	<div class="front-content">
		<div class="col-xs-10 list">
			<?php if ( have_posts() ) : ?>		
			<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'article-list.php'; ?>
			<?php endwhile; ?>

			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
			
		</div><!-- .list -->		
		<div class="col-xs-2"><?php get_sidebar(); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->

</div><!-- #content -->
</section><!-- #primary .site-content -->

<?php get_footer(); ?>