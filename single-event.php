<?php while ( have_posts() ) : the_post(); ?>
<div class="single event row front-content"><!-- Dave added .front-content to make sidebar background black -->
	
	<header class="entry-header col-xs-12">
		<div class="bg-flyer">
			<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		</div>
		
		<div class="header-info">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
			<h3><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('l, F j'); ?></h3>
		
			<div class="entry-details meta row">
				<div class="venue loc col-xs-12">
					<h4 class="category-name">Venue</h4>
					<h4 class="category-term"><?php $venues = get_the_terms($post->ID, 'venues');
						the_terms( $post->ID, 'venues');
						foreach ( $venues as $venue ) {
							echo $venue->description;
						}?></h4>
				</div>
				<div class="neighborhood nabe col-xs-12">	
					<h4 class="category-name">Neighborhood</h4>
					<div class="category-term"><?php the_terms( $post->ID, 'neighborhood') ?></div>
				</div>
				<div class="price col-xs-12">	
					<h4 class="category-name">Price</h4>
					<div class="category-term"><?php the_terms( $post->ID, 'price') ?></div>
				</div>
				<div class="djs col-xs-12"><!-- Dave removed .dj because it was adding unwanted padding -->
					<h4 class="category-name">Music by</h4>
					<div class="promoters category-term">
						<?php the_terms( $post->ID, 'promoters', '', '', ''); ?>
					</div>
					<div class="category-term"><?php the_terms( $post->ID, 'djs', '', '', ''); ?></div>
				</div>
				<div class="genre col-xs-12">
					<h4 class="category-name">Genre(s)</h4>
					<div class="category-term"><?php the_terms( $post->ID, 'genre', '', '', ''); ?></div>
				</div>
			</div><!-- end .entry-details -->
			<div class="buy-tickets">
				<?php 
					if(get_field('buy_tickets_link')){
						echo '<button type="button" class="btn btn-success">
							<a class="fa fa-ticket" target="_blank" href="' . get_field('buy_tickets_link') . '">TICKETS</a>
						 </button>';
					}
					if(get_field('rsvp_link')){
						echo '<button type="button" class="btn btn-info">
							<a target="_blank" href="' . get_field('rsvp_link') . '">RSVP</a>
						</button>';
					}
				?>
			</div><!-- .buy-tickets -->
		</div><!-- end .header-info -->
	</header><!-- .entry-header -->	
	
	<article id="post-<?php the_ID(); ?>" class="front-content col-sm-9 col-xs-12">
		<div class="flyer col-xs-4 col-xs-12">
			<?php get_template_part('modal'); ?>
		</div><!-- .flyer -->
		<div class="main col-sm-8 col-xs-12">
			<!-- Google Maps embed: -->
			<iframe class="col-xs-12" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $venue->description; ?>&output=embed"></iframe>
			<div class="entry-summary row">
				<?php the_content(); // Event Description ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-sm-3 xs-hide">
		<?php get_sidebar(); ?>
	</div>
	<div class="clearfix"></div>
</div><!-- end .single .event .row -->
<?php endwhile; ?>