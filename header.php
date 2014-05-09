<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Matheus Baumgart
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,300,700" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div id="header">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo get_site_url(); ?>" id="logo"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-circle logo-img" /></a>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<div id="social">
			<a href="http://linkedin.com/in/matheusbaumgart" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
			<a href="http://instagram.com/matheusbaumgart" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
			<a href="http://github.com/matheusbaumgart" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
			<a href="mailto:hello@matheusbaumgart.com">
			<span class="fa-stack">
			<i class="fa fa-square fa-stack-2x"></i>
			<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
			</span>
			</a>
			<a href="http://matheusbaumgart.com/rss" target="_blank"><i class="fa fa-rss-square fa-2x"></i></a>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'matheus-baumgart' ); ?></button>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'matheus-baumgart' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

</div>

	
