<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Faurefold
 */


$environment = WP_DEBUG == true ? "local" : "production";

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<?php /* loads fontawesome from CDN http://fontawesome.io/get-started/ */ ?>
<script src="https://use.fontawesome.com/2bd5f6627d.js"></script>
</head>

<body <?php body_class(); ?>>

<?php if ( $environment == "local" ) { ?>
	<div id="test-server-warning">
		<div class= "vertical-section">
			<p class="warning">
				This is a test version of the site
			</p>
		</div>
	</div>
<?php } ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'faurefold' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<!-- pink bar across top -->
		<div class="top">
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<div class="site-description full-width"><?php echo $description; /* WPCS: xss ok. */ ?></div>
			<?php
			else : ?>
				<div class="site-description full-width">&nbsp;</div>
			<?php
			endif; ?>				
		</div>

		<!-- main content of header -->
		<div class="middle full-width clear">

			<div class="title-and-logo">
				<img class="guiding-logo" src=<?php echo get_stylesheet_directory_uri() . "/img/ggselogo.png"; ?>>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>		
			</div>

			<div class="social-media">
				<a class="facebook" target="_blank" href="https://www.facebook.com/Faurefold">
					<!-- requires fontawesome to be loaded -->
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
			</div>

		</div>

		<!-- nav bar -->
		<div class="bottom">
			<div class="nav-container full-width">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'faurefold' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
