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

	<footer class="site-footer" role="contentinfo">
		<div class="content-area">
			Footer
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
