<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $cat_id = 3; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

				<article class="col col-1 md-col-4" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

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

				<article class="col col-1 md-col-4" id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>

	                <h3 class="entry-title">
	                    <a href="<?php the_permalink(); ?>">
	                        <?php the_title(); ?>
	                    </a>
	                </h3>
	                <p><?php the_field('name'); ?></p>
	                <img src="<?php the_field('image'); ?>" />

	        	</article>

			<?php endwhile; endif; ?>




		<img class="homeBanner" src="https://placehold.it/1000x50" />

		<?php
		/* if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop
			while ( have_posts() ) : the_post();*/



				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;*/ ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
