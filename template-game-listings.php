<?php
/**
 * Template Name: Game Listings
 */
get_header();

$slug = $post->post_name;

$args = array(
    'showposts' => -1,
    'post_type' => 'game',
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

				<article class="col game-listing">
					<div class="date col sm-col-1">
						<?php $date = DateTime::createFromFormat('Ymd', get_field('date')); ?>
						<span class="day"><?php echo $date->format('d'); ?></span>
						<span class="month"><?php echo $date->format('F'); ?></span>
					</div>
					<div class="gameType col sm-col-2">
						<p><?php the_field('type') ?></p>
					</div>
					<div class="team home-team col sm-col-3">
						<img src="<?php the_field('home_team_logo') ?>" />
						<h2><?php the_field('home_team_name') ?></h2>
					</div>
					<div class="versus col sm-col-1">VS</div>
					<div class="team away-team col sm-col-3">
						<img src="<?php the_field('away_team_logo') ?>" />
						<h2><?php the_field('away_team_name') ?></h2>
					</div>
					<div class="tickets col sm-col-2">
						<a class="btn">Buy tickets</a>
					</div>
				</article>


			<?php endwhile; endif; ?>
		</main>
</div>

<?php

get_footer();

?>