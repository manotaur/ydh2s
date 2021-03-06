<?php
/**
 * This Sidebar is being used to display time-specific content
 */
?>
<div id="main-sidebars">
	
	<!-- Not sure we need this any longer
	<div id="secondary" class="widget-area" role="complementary">
		<?php // dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
	-->
		
	<div id="sidebar" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<!-- Search not functioning, hide until we get it to work
			<aside id="search" class="widget widget_search">
				<?php // get_search_form(); ?>
			</aside>
			-->
			
			<aside>			
			<!-- this displays each taxonomy label and its terms (see get_taxonomy and get_terms in WP codex) -->		
			<?php 
			taxonomy_and_terms('neighborhood');
			taxonomy_and_terms('genre');
			terms_only('subgenre');
			taxonomy_and_terms('price');
			taxonomy_and_terms('venues');
			taxonomy_and_terms('djs');
			taxonomy_and_terms('promoters');
			?>						
			</aside>
			
			<aside id="archives" class="widget">
				<h3 class="widget-title">Upcoming</h3>
				<ul>
					<?php wp_get_archives( array( 'type' => 'daily', 'limit' => '15' ) ); ?>
				</ul>
			</aside>	
			
		<?php endif; // end sidebar widget area ?>
				
	</div><!-- end #sidebar -->
		
</div><!-- end #main-sidebars -->