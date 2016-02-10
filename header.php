<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test-theme' ); ?></a>
	<div id="topSection">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding col sm-col-3">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="siteLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/arrg-logo.png" /></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="siteLogo"><img src="<?php echo get_template_directory_uri(); ?>/img/arrg-logo.png" /></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="socialLinks col sm-col-9">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" id="searchText" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
						<input type="submit" id="searchsubmit" value="Search" class="btn" />
					</div>
				</form>

				<ul>
					<li class="forum"><a href="#">Forum</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="instagram"><a href="#">Instagram</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
				</ul>


			</div>
		</header><!-- #masthead -->

		<div id="mainNavCont" class="cf">
			<nav id="site-navigation" class="main-navigation cf" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test-theme' ); ?></button><p class="menuLabel sm-visible">Menu</p>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</div>

	<div id="content" class="site-content">
