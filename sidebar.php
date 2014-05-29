<?php
/**
 * This Sidebar is being used to display time-specific content
 */
?>
<div id="main-sidebars">
		
		<!-- events -->
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<?php echo "Today is ".date(l); ?>
			<p>Ok so event posts will go here:</p>
			<hr>
			
			<?php // Gets all events from the last week and the last 24 hours  
				query_posts('cat=3&post_status=future,publish'); ?>
			
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<?php 
						$weekbegin=strtotime("-1 day");
						$weekend=strtotime("+1 week");
						$post_age = get_post_time();
						if ($post_age >= $weekbegin && $post_age <= $weekend) { ?>

						<!-- Now an if then statement for each day of the week? -->
						<div class="eventCard">
							<?php the_title(); ?>
							(An event from the next week)
							<P><?php echo "Day of this post: ".get_post_time(l); ?></P>
						</div>

					<?php } ?>
					
					
					
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		
		<div id="sidebar" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'sscontent' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'sscontent' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div>
		
</div><!-- end #main-sidebars -->