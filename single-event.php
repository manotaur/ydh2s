<?php while ( have_posts() ) : the_post(); ?>
<div class="single event row front-content"><!-- Dave added .front-content to make sidebar background black -->
	
	<header class="entry-header col-xs-12">
		<div class="bg-flyer">
			<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		</div>
		
		<div class="header-info">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
			<h3><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('l, F j'); ?> <!-- date -->
				<div><?php	echo get_post_time('g:i a'); ?></div> <!-- start time -->
				</h3>
				
		
			<div class="entry-details meta row">
				<div class="venue loc col-xs-12">
					<h4 class="category-name">Venue</h4>
					<h4 class="category-term"><?php $venues = get_the_terms($post->ID, 'venues');
						the_terms( $post->ID, 'venues');
						foreach ( $venues as $venue ) {
							echo $venue->description;
						}?></h4>
				</div>
				<?php if (has_term('', 'neighborhood')){
					echo '<div class="neighborhood nabe col-xs-12">';	
						echo '<h4 class="category-name">Neighborhood</h4>';
						echo '<div class="category-term">';  
							the_terms( $post->ID, "neighborhood"); 
						echo '</div>';
					echo '</div>';
				}?>
				<?php if (has_term('', 'price')){
					echo '<div class="price col-xs-12">';	
						echo '<h4 class="category-name">Price</h4>';
						echo '<div class="category-term">';
							the_terms( $post->ID, 'price');
						echo '</div>';
					echo '</div>';
				}?>
				<?php if (has_term('', 'promoters') || has_term('', 'djs')){
					echo '<div class="djs col-xs-12">'; 
						echo '<h4 class="category-name">Music by</h4>';
						echo '<div class="promoters category-term">';
							the_terms( $post->ID, 'promoters', '', '', '');
						echo '</div>';
						echo '<div class="category-term">';
							the_terms( $post->ID, 'djs', '', '', '');
						echo '</div>';
					echo '</div>';
				}?>
				<?php if (has_term('', 'genre') || has_term('', 'subgenre')){
				echo '<div class="genre col-xs-12">';
					echo '<h4 class="category-name">Genre(s)</h4>';
					echo '<div class="category-term">';
						the_terms( $post->ID, 'genre', '', '', '');
						the_terms( $post->ID, 'subgenre', '', '', '');
					echo '</div>';
				echo '</div>';
				}?>
			</div><!-- end .entry-details -->
			<div class="buy-tickets">
				<?php 
					if(get_field('buy_tickets_link')){
						echo '<a class="fa fa-ticket btn btn-success" target="_blank" href="' . get_field('buy_tickets_link') . '">Tickets</a>';
					}
					if(get_field('rsvp_link')){
						echo '<a class="btn btn-info" target="_blank" href="' . get_field('rsvp_link') . '">RSVP</a>';
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
				<div class="single-event-desc"><?php the_content(); // Event Description ?></div>
			</div><!-- .entry summary -->
		</div><!-- .main -->
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-sm-3 xs-hide">
		<?php get_sidebar(); ?>
	</div>
	<div class="clearfix"></div>
</div><!-- end .single .event .row -->
<?php endwhile; ?>