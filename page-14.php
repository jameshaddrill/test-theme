<?php
/**
 * The template for displaying the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package arrg_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section id="homeHero">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $image = get_field('main_image'); ?>
			<img src="<?php echo $image['url' ]; ?>" alt="<?php echo $image['alt' ]; ?>"/>
			<?php endwhile; // end of the loop. ?>
		</section>

		<section id="homeLinks">
			<?php $cat_id = 3; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 sm-col-6 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

					<img src="<?php the_field('thumbnail'); ?>" class="circleImg" />

	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        Skater of the month
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>

	        	</article>

			<?php endwhile; endif; ?>

			<?php $cat_id = 5; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 sm-col-6 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

					<img src="<?php the_field('thumbnail'); ?>" class="circleImg" />
	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        Official of the month
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>

	        	</article>

			<?php endwhile; endif; ?>
			<?php $cat_id = 3; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 sm-col-6 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

					<img src="<?php the_field('thumbnail'); ?>" class="circleImg" />

	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        Skater of the month
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>

	        	</article>

			<?php endwhile; endif; ?>

			<?php $cat_id = 5; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 sm-col-6 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

					<img src="<?php the_field('thumbnail'); ?>" class="circleImg" />
	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        Official of the month
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>

	        	</article>

			<?php endwhile; endif; ?>
		</section>

		<section>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class"tabs">
					<h3>
						<?php the_field('tab_one_header'); ?>						
					</h3>
				</div>
			<?php endwhile; // end of the loop. ?>

		</section>
</main>
</div>

<?php

get_footer();
