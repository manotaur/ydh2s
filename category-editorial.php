<?php
/**
 * The template for displaying posts from the edditorial category, i.e. all blog posts
 */
add_theme_support('post-thumbnails');
get_header(); ?>
<div id="content" class="container editorial listing">
	<h1 class="page-title">Articles</h1>
	
	<div class="front-content">
		<div class="col-sm-10 col-xs-12 listed">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					include 'article-list.php';
				endwhile;

			else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
			
		</div><!-- .list -->		
		<div class="col-sm-2 xs-hide"><?php get_sidebar('article'); ?></div>
		<div class="clearfix"></div>
	</div><!-- .front-content -->

</div><!-- #content -->
</section><!-- #primary .site-content -->

<?php get_footer(); ?>