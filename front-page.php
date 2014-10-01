<?php
/*
Template Name: Homepage
*/
	add_theme_support('post-thumbnails');
?>
		<?php get_header(); ?>

<div id="home" class="container">
	<div class="row">
		<div class="col-xs-12 signup">
			<p>You Don't Have To Settle is a Captain Planet-style DJ collective based out of Brooklyn.<br/>
				We throw dance parties all over the finest borough in the land. Let's sweat.</p>
			<div class="col-xs-3"></div>
			<input type="text" class="col-xs-4" placeholder="Join our Mailing List">
			<button>SIGN UP</button>
		</div><!-- end .signup -->
	</div> <!-- end .row -->

	<div class="front-content row">
		<div class="col-xs-12 featured"><!-- Featured Events -->
			<h3 class="section-heading row">FEATURED EVENTS</h3>
			<div class="posts row">
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
				<div class="clearfix"></div>
			</div><!-- end .posts -->
		</div><!-- end .featured -->

		<div class="col-xs-12 events"><!-- All the week's events -->
			<h3 class="section-heading row">MORE EVENTS</h3>
			<?php // echo "Today is ".date(l); ?>
			<div class="filtering col-xs-12">
				<h4>FILTER</h4>
				<div class="btn-group" id="filter">
					<button type="button" class="btn btn-default active" data-filter="*">All</button>
					<button type="button" class="btn btn-default" data-filter=".Williamsburg">Williamsburg</button>
					<button type="button" class="btn btn-default" data-filter=".Bushwick">Bushwick</button>
					<button type="button" class="btn btn-default" data-filter=".electro">Electro</button>
					<button type="button" class="btn btn-default" data-filter=".indie">Indie</button>
					<button type="button" class="btn btn-default" data-filter=".Free">Free</button>
				</div>
				<div class="clearfix"></div>
			
      		<div class="posts row filter-us">
				<?php // Gets all event posts from the last week and the last 24 hours  
					query_posts('category_name=Event&post_status=future,publish'); ?>
			
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
							
						<?php 
							$weekbegin=strtotime("-1 day");
							$weekend=strtotime("+1 week");
							$post_age = get_post_time();
							if ($post_age >= $weekbegin && $post_age <= $weekend) { ?>
							
							<?php include 'post-thumb.php'; // Post thumbnail ?>
							<!-- <div class="eventCard">< ? p h p include 'post-list.php'; ?></div> -->
						<?php } ?>	
					
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- end .posts -->
		</div><!-- end .events -->
								
		<div class="row editorial">
			<h3 class="section-heading-left">ARTICLES</h3>
			<div class="posts row">
				<?php 
					$editargs = array(
						'category_name' => 'Editorial',
						'posts_per_page' => 2
					);
					query_posts($editargs);
				?>
					
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php include 'article-thumb.php'; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				
				<div class="clearfix"></div>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- end .editorial -->
				
	</div><!-- end .front-content -->
			
</div><!-- end .container -->
	<?php get_footer(); ?>	
</body>
</html>
