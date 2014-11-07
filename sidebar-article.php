<?php
/**
 * This is the sidebar for the newsletter page
 */
?>
<div id="article-sidebar">
			
	<div id="sidebar" class="widget-area article-sidebar" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'More Articles', 'sscontent' ); ?></h3>
				<ul>
				<?php
				$newsletterArgs = array(						
					'category_name' => 'Editorial',
					'posts_per_page' => 10
				);
				$the_query = new WP_Query( $newsletterArgs );
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
				
				</ul>
				<h3>Tags</h3>
				<?php wp_tag_cloud(); ?>
			</aside>



		<?php endif; // end sidebar widget area ?>
	</div><!-- #sidebar -->
		
</div><!-- end #main-sidebars -->