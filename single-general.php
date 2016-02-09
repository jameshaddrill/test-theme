<?php
		while ( have_posts() ) : the_post(); ?>

		<section class="col">
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
		</section>

		<?php endwhile; // End of the loop.
		?>