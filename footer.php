<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'test-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'test-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'test-theme' ), 'test-theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
