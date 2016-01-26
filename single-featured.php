<?php
		while ( have_posts() ) : the_post(); ?>

			<article class="cf col sm-col-8 article">
				<header>
					<h1>Skater of the month</h1>
					<p class="date"><?php the_time('F Y') ?></p>
				</header>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
				<?php the_content() ?>
				<p><?php the_field('name'); ?> - #<?php the_field('number'); ?></p>
				<p><strong>Joined ARRG in: </strong><?php the_field('joined'); ?></p>
				<p><strong>Role: </strong><?php the_field('role'); ?></p>

			</article>

			<aside class="col sm-col-4">
			<img src="<?php the_field('image'); ?>" />
			</aside>

		<?php endwhile; // End of the loop.
		?>