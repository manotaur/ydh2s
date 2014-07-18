<?php
/*
Template Name: Homepage
*/
	add_theme_support('post-thumbnails');
?>
		<?php get_header(); ?>
		
		<div id="content" class="home">
			<div id="row">
				<div class="col-sm-4 featured">
					<?php 
					$featargs = array(
						'post_status' => 'future,publish',
						'category_name' => 'Featured',
						'posts_per_page' => 8
					);
					query_posts($featargs);
					?>
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php include 'post-thumb.php'; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				
				<div class="col-sm-4 events">
					<?php echo "Today is ".date(l); ?>
					<p>Ok so event posts will go here:</p>
					<hr>
					<?php // Gets all event posts from the last week and the last 24 hours  
						query_posts('category_name=Event&post_status=future,publish'); ?>
			
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<?php 
								$weekbegin=strtotime("-1 day");
								$weekend=strtotime("+1 week");
								$post_age = get_post_time();
								if ($post_age >= $weekbegin && $post_age <= $weekend) { ?>
	
								<!-- Now an if then statement for each day of the week -->
								<div class="eventCard">
									<?php include 'post-list.php'; ?>
								</div>

							<?php } ?>	
					
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div><!-- end .events -->
		</div><!-- end .content -->

		
	</div><!-- end .container -->
	<?php get_footer(); ?>	
</body>
</html>
