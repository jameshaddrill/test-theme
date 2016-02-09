<?php
/**
 * Template Name: Team
 */
get_header();

$slug = $post->post_name;

$args = array(
    //'showposts' => -1,
    'post_type' => 'player',
    'tax_query' => array(
        array(
        'taxonomy' => 'team',
        'field' => 'slug',
        'terms' => array($slug)
        )

   )
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
				<div class="sm-col-3 xs-col-2 col player">
					<img src="<?php the_field('headshot'); ?>" class="circleImg" alt="Headshot for <?php the_field('name'); ?>" />
					<p><?php the_field('name'); ?><br />
					<small>#<?php the_field('number'); ?></small></p>
				</div>

			<?php endwhile; endif; ?>
		</main>
</div>

<?php

get_footer();

?>