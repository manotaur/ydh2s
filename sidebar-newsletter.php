<?php
/**
 * This is the sidebar for the newsletter page
 */
?>
<div id="main-sidebars">
			
	<div id="sidebar" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		
			<!-- don't need search form for newsletter sidebar
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside> -->

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'sscontent' ); ?></h3>
				
				<?php
				$newsletterArgs = array(						
					'category_name' => 'newsletters'
				);
				// The Query
				$the_query = new WP_Query( $newsletterArgs );

				// The Loop
				if ( $the_query->have_posts() ) {
					echo '<ul>';
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
					<?}
					echo '</ul>';
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
			</aside>



		<?php endif; // end sidebar widget area ?>
	</div><!-- #sidebar -->
		
</div><!-- end #main-sidebars -->