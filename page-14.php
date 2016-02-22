<?php
/**
 * The template for displaying the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package arrg_theme
 */

$today = date('Ymd');

$args_news = array(
    'showposts' => 4,
    'post_type' => 'post',
    'category_name' => 'news',
);

$args_games = array(
    'showposts' => 2,
    'post_type' => 'game',

); ?>

<?php get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section id="homeHero" class="cf">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $image = get_field('main_image'); ?>
			<img src="<?php echo $image['url' ]; ?>" alt="<?php echo $image['alt' ]; ?>"/>
			<?php endwhile; // end of the loop. ?>
		</section>

		<section id="homeLinks" class="cf">
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

		<section class="cf md-hidden col">
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="tabs">
			  <ul class="cf">
			    <li class="active"><a href="#tabs-1"><?php the_field('tab_one_header'); ?></a></li>
			    <li><a href="#tabs-2"><?php the_field('tab_two_header'); ?></a></li>
			    <li><a href="#tabs-3"><?php the_field('tab_three_header'); ?></a></li>
			  </ul>
			  <div id="tabs-1">
			    <?php the_field('tab_one_content'); ?>
			  </div>
			  <div id="tabs-2">
			    <?php the_field('tab_two_content'); ?>
			  </div>
			  <div id="tabs-3">
			    <?php the_field('tab_three_content'); ?>
			  </div>
			</div>

			<?php endwhile; // end of the loop. ?>
		</section>

		<section class="cf md-visible accordions col">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="active"><a href="#accordion1"><?php the_field('tab_one_header'); ?></a></h2>
			<div id="accordion1" class="accordionContent">
				<?php the_field('tab_one_content'); ?>
			</div>
			<h2><a href="#accordion2"><?php the_field('tab_two_header'); ?></a></h2>
			<div id="accordion2" class="accordionContent">
				<?php the_field('tab_two_content'); ?>
			</div>
			<h2><a href="#accordion3"><?php the_field('tab_three_header'); ?></a></h2>
			<div id="accordion3" class="accordionContent">
				<?php the_field('tab_three_content'); ?>
			</div>


			<?php endwhile; // end of the loop. ?>
		</section>

		<section class="cf">

			<section class="col md-col-7 latestNews">
				<h2>Latest News</h2>
				<?php
				$latest_posts = new WP_Query( $args_news );
				if( $latest_posts->have_posts() ) : while( $latest_posts->have_posts() ) : $latest_posts->the_post();  ?>
					<article class="newsSnippet">
						<div class="media">
							<div class="dateBlock">
								<span class="day"><?php echo the_time('d') ?></span>
								<span class="month"><?php echo the_time('F') ?></span>
							</div>
							<div class="bd">
								<h3><?php the_title() ?></h3>
								<?php
								$thumbnail = get_field('thumbnail');

								if($thumbnail) { ?>
									<img src="<?php echo $thumbnail ?>" />
								<?php }

								the_excerpt() ?>
							</div>
						</div>
					</article>

				<?php endwhile; endif; ?>
			</section>

			<section class="col md-col-5 latestGames">
				<h2>Recent Games</h2>
				<div class="cf">
					<?php
					$latest_posts = new WP_Query( $gameArgs );
					$today = date('Ymd');

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

					$old_posts = new WP_Query( $old_args );
					if( $old_posts->have_posts() ) : while( $old_posts->have_posts() ) : $old_posts->the_post();
					$date = DateTime::createFromFormat('Ymd', get_field('date')); ?>
					<h3><?php echo $date->format('d F'); ?></h3>

					<div>
						<div class="col sm-col-6">
							<img src="<?php the_field('home_team_logo') ?>" />
							<p><?php the_field('home_team_points') ?></span></p>
						</div>
						<div class="col sm-col-6">
							<img src="<?php the_field('away_team_logo') ?>" />
							<p><?php the_field('away_team_points') ?></p>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>

				<a class="btn">Click here for upcoming games</a>
			</section>

		</section>

</main>
</div>

<?php

get_footer();
