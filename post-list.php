<article id="post-<?php the_ID(); ?>" class="list row">
	<div class="flyer col-xs-3" style="background: olive"><?php echo get_the_post_thumbnail($page->ID, 'category-thumb'); ?></div>
	<div class="main col-xs-9">
		<header class="entry-header">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			
			<h5><div class="days-of-the-week"><?php the_terms( $post->ID, 'dayoftheweek', '', '', ''); ?></div>
				<?php echo get_post_time('F j'); ?></h5>	
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
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sscontent' ) ); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
