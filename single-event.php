<?php while ( have_posts() ) : the_post(); ?>
<div class="single event row">
	
	<header class="entry-header col-xs-12">
		<div class="bg-flyer">
			<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
			
		<h3><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
			<?php echo get_post_time('F j'); ?></h3>
		
			<div class="entry-details meta row">
				<div class="venue loc col-xs-12">
					<h4>Venue</h4>
					<?php the_terms( $post->ID, 'venues') ?>
				</div>
				<div class="neighborhood nabe col-xs-12">	
					<h4>Neighborhood</h4>
					<?php the_terms( $post->ID, 'neighborhood') ?>
				</div>
				<div class="price col-xs-12">	
					<h4>Price</h4>
					<?php the_terms( $post->ID, 'price') ?>
				</div>
				<div class="djs dj col-xs-12">
					<h4>Music by</h4>
					<div class="promoters">
						<?php the_terms( $post->ID, 'promoters', '', '', ''); ?>
					</div>
					<?php the_terms( $post->ID, 'djs', '', '', ''); ?>
				</div>
				<div class="genre col-xs-12">
					<h4>Genre(s)</h4>
					<?php the_terms( $post->ID, 'genre', '', '', ''); ?>
				</div>
			</div><!-- end .entry-details -->
	</header><!-- .entry-header -->	
	
	<article id="post-<?php the_ID(); ?>" class="front-content col-xs-9">
		<div class="flyer col-xs-4">
			<a href="#" data-toggle="modal" data-target="#modal-<?php the_ID(); ?>">
			<?php echo get_the_post_thumbnail($page->ID, 'category-thumb'); ?>
			</a>
			<!-- Modal -->
			<div class="modal fade" id="modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
      				</div><!-- .modal-header -->
      				<div class="modal-body">
      					<?php echo get_the_post_thumbnail($page->ID, 'flyer'); ?>
      				</div><!-- .modal-body -->
  				</div><!-- .modal-dialog -->
			</div><!-- .modal-fade -->
		</div><!-- .flyer -->		
		<div class="main col-xs-8">
			<div class="entry-summary row">
				<?php the_content(); ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-xs-3">
		<?php get_sidebar(); ?>
	</div>
</div><!-- end .single .event .row -->
<?php endwhile; ?>