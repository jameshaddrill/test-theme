<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Test_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<article class="cf">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
				<?php the_time('F jS, Y') ?>
				<img src="<?php the_field('image'); ?>" class="circleImg" />

				<div class="bd">
					<?php the_content() ?>
					<p><?php the_field('name'); ?> - #<?php the_field('number'); ?></p>
					<p><strong>Joined ARRG in: </strong><?php the_field('joined'); ?></p>
					<p><strong>Role: </strong><?php the_field('role'); ?></p>
				</div>
			</article>

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
