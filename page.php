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
		<article>
			<div class="col sm-col-12">
				<?php
				while ( have_posts() ) : the_post(); ?>
					<!--get_template_part( 'template-parts/content', 'page' );-->

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
				<?php endwhile; // End of the loop.
				?>
			</div>
		</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
