<?php
/**
 * Template Name: Listings
 */
//get_header();

$slug = $post->post_name;

$args = array(
    'showposts' => -1,
    'post_type' => 'post',
    'category_name' => $slug,
);

?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="col">

				<h1><?php echo $post->post_title; ?></h1>


			</header>

			<?php
			$latest_posts = new WP_Query( $args );
			if( $latest_posts->have_posts() ) : while( $latest_posts->have_posts() ) : $latest_posts->the_post();  ?>
				<article class="col">
					<h2><?php the_title() ?></h2>
					<?php the_excerpt() ?>
				</article>


			<?php endwhile; endif; ?>
		</main>
</div>

<?php

get_footer();

?>