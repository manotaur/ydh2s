<?php while ( have_posts() ) : the_post(); ?>
<div class="single event row">
	
	<header class="entry-header col-xs-12">
		<div class="bg-flyer">
			<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		</div>
		
		<div class="header-info">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
			<div class="entry-details meta row">
				<div class="venue loc col-xs-12">
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
			</div><!-- end .entry-details -->
		</div>
	</header><!-- .entry-header -->	
	
	<article id="post-<?php the_ID(); ?>" class="front-content col-xs-9">
			<!-- Google Maps embed: -->
			<iframe class="col-xs-12" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $venue->description; ?>&output=embed"></iframe>
			<div class="entry-summary row">
				<?php the_content(); // Venue Description
					$archArgs = array(
					//	'date_query' => array(
					//		array( // Show events less than a day old
					//			'after' => '-1 day'
					//		),
					//	),
						'category_name' => 'Event',
						'order' => 'ASC'
					);
					$the_query = new WP_Query($archArgs);
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						include 'post-list.php'; 
					} ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-xs-3">
		<?php get_sidebar(); ?>
	</div>
</div><!-- end .single .event .row -->
<?php endwhile; ?>