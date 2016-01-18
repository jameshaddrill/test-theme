<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $image = get_field('main_image'); ?>
			<img src="<?php echo $image['url' ]; ?>" alt="<?php echo $image['alt' ]; ?>"/>
			<p><?php the_field('test'); ?></p>
			<?php endwhile; // end of the loop. ?>
		</section>

		<section>
			<?php $cat_id = 3; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        <?php the_title(); ?>
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>



	                <img src="<?php the_field('image'); ?>" class="circleImg" />

	        	</article>

			<?php endwhile; endif; ?>

			<?php $cat_id = 1; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 md-col-3" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        <?php the_title(); ?>
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>
	                <img src="<?php the_field('image'); ?>" />

	        	</article>

			<?php endwhile; endif; ?>
		</section>
</main>
</div>

<?php

get_footer();
