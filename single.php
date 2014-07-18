<?php get_header(); ?>

	<?php if ( in_category('2') ): ?>
    	<div id="primary" class="site-content event">
	<?php else: ?>
    	<div id="primary" class="site-content">
	<?php endif; ?>

			<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="list post">
					<div class="header-image">
						<?php echo get_the_post_thumbnail(); ?>
					</div>
					<header>
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
						
						<div class="time">
							<?php the_terms( $post->ID, 'dayoftheweek' ); ?>, <?php the_date(); ?>
							<?php the_time(); ?>
						</div>


						<div class="meta">
							<div class="tags">
								<?php the_tags(); ?>
							</div>
							<div class="venue">
								<?php the_terms( $post->ID, 'venues', 'Venue: ', ', ', ' ' ); ?>
							</div>
							<div class="neighborhood">
								<?php the_terms( $post->ID, 'neighborhood', 'Neighborhood: ', ', ', ' ' ); ?>
							</div>
							<div class="genre">
								<?php the_terms( $post->ID, 'genre', 'Genre: ', ', ', ' ' ); ?>
							</div>
							<div class="price">
								<?php the_terms( $post->ID, 'price', 'Price: ', ', ', ' ' ); ?>
							</div>
							<div class="djs">
								<?php the_terms( $post->ID, 'djs', 'DJs: ', ', ', ' ' ); ?>
							</div>
							<div class="promoters">
								<?php the_terms( $post->ID, 'promoters', 'Promoter(s): ', ', ', ' ' ); ?>
							</div>
							<div class="days-of-the-week">
								<?php the_terms( $post->ID, 'dayoftheweek', 'Day of the Week: ', ', ', ' ' ); ?>
							</div>
						</div><!-- .meta -->
					</header><!-- .entry-header -->
					<div class="description">
						<?php the_content(); ?>
					</div><!-- .description -->
				</article><!-- #post-<?php the_ID(); ?> -->


			<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>