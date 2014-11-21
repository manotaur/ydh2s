<article id="post-<?php the_ID(); ?>" class="list row">
	<div class="flyer list-thumb col-xs-3">
		<?php get_template_part('modal'); ?>
	</div><!-- .flyer -->
   
	<div class="main col-xs-9">
		<header class="entry-header">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			
			<div class="day-date col-xs-12"><h5>
				<?php $date_week = get_post_time('l');
					$date_month = get_post_time('F');
					$date_month_num = get_post_time('n');
					$date_day = get_post_time('j');
					$date_year = get_post_time('Y');
					echo "<a href='";
					echo bloginfo('url');
					echo "/$date_year/$date_month_num/$date_day'>
						$date_week, $date_month $date_day</a>";
				?></h5></div>
		</header><!-- .entry-header -->
		
		<div class="entry-details meta row">
			<div class="venue loc col-xs-5">
				<h6>Venue</h6>
				<?php the_terms( $post->ID, 'venues') ?>
			</div>
			<div class="neighborhood nabe col-xs-5">	
				<h6>Neighborhood</h6>
				<?php the_terms( $post->ID, 'neighborhood') ?>
			</div>
			<div class="price col-xs-2">	
				<h6>Price</h6>
				<?php the_terms( $post->ID, 'price') ?>
			</div>
			<div class="djs dj col-xs-12">
				<h6>Music by</h6>
				<div class="promoters">
					<?php the_terms( $post->ID, 'promoters', '', '', ''); ?>
				</div>
				<?php the_terms( $post->ID, 'djs', '', '', ''); ?>
			</div>
			<div class="genre col-xs-12">
				<h6>Genre(s)</h6>
				<?php the_terms( $post->ID, 'genre', '', '', ''); ?>
			</div>
		</div><!-- end .entry-details -->

		<div class="entry-summary row">
			<?php
			// this variable is assigned to a "read more" link & is passed into the custom excerpt function:  
			$readMore = ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
			custom_excerpt(60, $readMore); ?>
		</div><!-- .entry-summary -->
			<div class="buy-tickets">
				<?php 
					if(get_field('buy_tickets_link')){
						echo '<button type="button" class="btn btn-success">
							<a class="fa fa-ticket" target="_blank" href="' . get_field('buy_tickets_link') . '">Tickets</a>
						 </button>';
					}
					if(get_field('rsvp_link')){
						echo '<button type="button" class="btn btn-info">
							<a target="_blank" href="' . get_field('rsvp_link') . '">RSVP</a>
						</button>';
					}
				?>
			</div><!-- .buy-tickets -->
	</div><!-- .main -->
</article><!-- #post-<?php the_ID(); ?> -->
