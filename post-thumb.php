<?php include('tax-terms.php')  // Adds taxonomy class names to the post, via the $post_terms variable ?>
<article id="post-<?php the_ID(); ?>" class="thumb <?php echo $post_terms ?><?php echo $thumbWidth ?>">	
	<div class="flyer"><?php echo get_the_post_thumbnail($page->ID, 'category-thumb'); ?></div>
	<div class="entry-info">
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'sscontent' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<div class="row">
			<div class="day-date col-xs-12">
				<?php $date_week = get_post_time('l');
					$date_month = get_post_time('F');
					$date_month_num = get_post_time('n');
					$date_day = get_post_time('j');
					$date_year = get_post_time('Y');
					echo "<a href='";
					echo bloginfo('url');
					echo "/$date_year/$date_month_num/$date_day'>
						$date_week, $date_month $date_day</a>";
				?>
			</div><!-- .day-date -->
		</div><!-- .row -->
		<div class="entry-desc event-desc">
			<?php custom_excerpt(20); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-desc -->
		
		<!-- let's hide this section, it's not really necessary
		<div class="entry-details row">
			<div class="loc col-xs-5">
				<h6>Location</h6>
				<?php the_terms( $post->ID, 'venues') ?>
			</div>
			<div class="nabe col-xs-7">
				<h6>Neighborhood</h6>
				<?php the_terms( $post->ID, 'neighborhood') ?>
			</div>
			<div class="dj col-xs-12">
				<h6>Music by</h6>
				<?php the_terms( $post->ID, 'djs') ?>
			</div>
		</div> 
		end .entry-details -->
		
		<div class="meta">
			<!-- I don't know that we need tags anymore now that we're using taxonomies, but here's the code
			<div class="tags">
				<?php the_tags(); ?>
			</div>
			-->
			<div class="venue">
				<?php the_terms( $post->ID, 'venues', '', '', ''); ?>
			</div>
			<div class="neighborhood">
				<?php the_terms( $post->ID, 'neighborhood', '', '', ''); ?>
			</div>
			<div class="genre">
				<?php the_terms( $post->ID, 'genre', '', '', ''); ?>
			</div>
			<div class="price">
				<?php the_terms( $post->ID, 'price', '', '', ''); ?>
			</div>
			<div class="djs">
				<?php the_terms( $post->ID, 'djs', '', '', ''); ?>
			</div>
			<div class="promoters">
				<?php the_terms( $post->ID, 'promoters', '', '', ''); ?>
			</div>
			<div class="clearfix"></div>
		</div><!-- .meta -->
		
		<div class="sharing">
			<div class="buy-tickets thumbnail-buttons">
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
			<div class="thumbnail-buttons">
				<div>SHARE</div>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
					<a class="fa fa-facebook fa-stack-1x" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"></a>
				</span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square fa-stack-2x"></i>
					<a class="fa fa-twitter fa-stack-1x" target="_blank" href="https://twitter.com/share?text=<?php the_title(); ?>:&url=<?php the_permalink(); ?>"></a>
				</span>
			</div><!-- .thumbnail-buttons -->
		</div><!-- .sharing -->
	</div><!-- .entry-info -->

</article><!-- #post -->
