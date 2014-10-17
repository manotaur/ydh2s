<?php while ( have_posts() ) : the_post(); ?>
<div class="single event row">
	
	<header class="entry-header col-xs-12">
		<div class="bg-flyer">
			<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		</div>
		
		<div class="header-info">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
			
		<h3><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
			<?php echo get_post_time('F j'); ?></h3>
		
			<div class="entry-details meta row">
				<div class="venue loc col-xs-12">
					<h4>Venue</h4>
					<h4><?php $venues = get_the_terms($post->ID, 'venues');
						the_terms( $post->ID, 'venues');
						foreach ( $venues as $venue ) {
							echo $venue->description;
						}?></h4>
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
		</div>
	</header><!-- .entry-header -->	
	
	<article id="post-<?php the_ID(); ?>" class="front-content col-xs-9">
		<div class="flyer col-xs-4">
			<?php  	get_template_part('modal'); ?>
		</div><!-- .flyer -->
		<div class="main col-xs-8">
			<!-- Google Maps embed: -->
			<iframe class="col-xs-12" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $venue->description; ?>&output=embed"></iframe>
			<div class="entry-summary row">
				<?php the_content(); // Event Description ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-xs-3">
		<?php get_sidebar(); ?>
	</div>
</div><!-- end .single .event .row -->
<?php endwhile; ?>