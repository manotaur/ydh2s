<?php
/**
 * This Sidebar is being used to display time-specific content
 */
?>
<div id="main-sidebars">
		
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
		
		
	<div id="sidebar" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
			
			<aside>			
			<!-- this displays each taxonomy label and its terms (see get_taxonomy and get_terms in WP codex) -->		
			<?php 
			function taxonomy_and_terms($taxonomy_name){
				$taxonomy = get_taxonomy($taxonomy_name);
    			echo '<h2>' . $taxonomy->label . '</h2>';
    			$terms = get_terms($taxonomy->name);
 				if ( !empty( $terms ) && !is_wp_error( $terms ) ){
     				echo "<ul>";
     				foreach ( $terms as $term ) {
       					echo "<li><a href='" . get_term_link($term,$terms) . "'>" . $term->name . "</a></li>";    
     				}
     				echo "</ul>";
 				}			
			}
			taxonomy_and_terms('neighborhood');
			taxonomy_and_terms('genre');
			taxonomy_and_terms('price');
			taxonomy_and_terms('venues');
			taxonomy_and_terms('djs');
			taxonomy_and_terms('promoters');
			?>						
			</aside>
			
		<?php endif; // end sidebar widget area ?>
				
	</div><!-- end #sidebar -->
		
</div><!-- end #main-sidebars -->