<?php
/**
 * Template Name: Game Listings
 */
get_header();

$today = date('Ymd');
$slug = $post->post_name;

$args = array(
    'showposts' => -1,
    'post_type' => 'game',
    'meta_query' => array(
		array(
	        'key'		=> 'date',
	        'compare'	=> '>',
	        'value'		=> $today,
	    )
	)
);

$old_args = array(
	'showposts' => -1,
    'post_type' => 'game',
    'meta_query' => array(
		array(
	        'key'		=> 'date',
	        'compare'	=> '<=',
	        'value'		=> $today,
	    )
	)
);

?>

<div id="primary" class="content-area cf">
		<main id="main" class="site-main" role="main">

			<header class="col">

				<h1><?php echo $post->post_title; ?></h1>


			</header>
			<section class="col upcomingGames">
				<h2>Upcoming games</h2>
				<?php
				$latest_posts = new WP_Query( $args );
				if( $latest_posts->have_posts() ) : while( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>

					<article class="game-listing cf">
						<div class="dateBlock col md-col-1">
							<?php $date = DateTime::createFromFormat('Ymd', get_field('date')); ?>
							<span class="day"><?php echo $date->format('d'); ?></span>
							<span class="month"><?php echo $date->format('F'); ?></span>
						</div>
						<div class="gameType col md-col-2">
							<p><?php the_field('type') ?></p>
						</div>
						<div class="team home-team col md-col-3">
							<img src="<?php the_field('home_team_logo') ?>" />
							<p class="league"><?php the_field('home_team_league') ?></p>
							<p><?php the_field('home_team_name') ?></p>
						</div>
						<div class="versus col md-col-1">VS</div>
						<div class="team away-team col md-col-3">
							<img src="<?php the_field('away_team_logo') ?>" />
							<p class="league"><?php the_field('away_team_league') ?></p>
							<p><?php the_field('away_team_name') ?></p>
						</div>
						<div class="tickets col md-col-2">
							<a class="btn">Buy tickets</a>
						</div>
					</article>

				<?php endwhile; endif; ?>
				<?php rewind_posts(); ?>
			</section>

			<section class="col pastGames">
				<h2>Past Games</h2>
				<?php
				$old_posts = new WP_Query( $old_args );
				if( $old_posts->have_posts() ) : while( $old_posts->have_posts() ) : $old_posts->the_post(); ?>
					<article class="past-game-listing cf">
						<div class="date col sm-col-1">
							<?php $date = DateTime::createFromFormat('Ymd', get_field('date')); ?>
							<?php echo $date->format('d/m/Y'); ?>
						</div>
						<div class="gameType col sm-col-2">
							<p><strong><?php the_field('type') ?></strong></p>
						</div>
						<div class="team home-team col sm-col-3">
							<p class="homeName"><?php the_field('home_team_name') ?></p>
						</div>
						<div class="col sm-col-1">
							<p><?php the_field('home_team_points') ?> : <?php the_field('away_team_points') ?></p>

						</div>
						<div class="team away-team col sm-col-3">
							<p class="awayName"><?php the_field('away_team_name') ?></p>
						</div>
						<div class="photos col sm-col-2">
							<p><a target="_blank" href="<?php the_field('photographer_link') ?>"><?php the_field('photographer_name') ?></a></p>
						</div>
					</article>

				<?php endwhile; endif; ?>

			</section>
		</main>
</div>

<?php

get_footer();

?>