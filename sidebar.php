<?php
/**
 * This Sidebar is being used to display time-specific content
 */
?>
<div id="main-sidebars" style="background: purple;">
		
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php echo "Today is ".date(l); ?>
		<p>Ok so event posts will go here:</p>
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