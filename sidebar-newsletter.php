<?php
/**
 * This is the sidebar for the newsletter page
 */
?>
<div id="main-sidebars" style="background: purple;">
			
	<div id="sidebar" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		
			<!-- don't need search form for newsletter sidebar
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside> -->

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'sscontent' ); ?></h1>
				<?php
				$newsletterArgs = array(						
					'category_name' => 'newsletter'
				);
				query_posts($newsletterArgs);
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<?php	endwhile;

				else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?>, guy</p>
			<?php endif; ?>
			</aside>



		<?php endif; // end sidebar widget area ?>
	</div><!-- #sidebar -->
		
</div><!-- end #main-sidebars -->