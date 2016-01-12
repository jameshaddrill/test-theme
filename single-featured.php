<?php
		while ( have_posts() ) : the_post(); ?>

			<article class="cf">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
				<?php the_time('F jS, Y') ?>
					<img src="<?php the_field('image'); ?>" class="circleImg" />


					<?php the_content() ?>
					<p><?php the_field('name'); ?> - #<?php the_field('number'); ?></p>
					<p><strong>Joined ARRG in: </strong><?php the_field('joined'); ?></p>
					<p><strong>Role: </strong><?php the_field('role'); ?></p>

			</article>

		<?php endwhile; // End of the loop.
		?>