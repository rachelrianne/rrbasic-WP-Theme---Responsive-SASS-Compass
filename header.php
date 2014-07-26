<!DOCTYPE html>

<!--[if lt IE 7]> 
<html id="lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) ]><!--> 
<html lang="en"> 
<!--<![endif]-->
	<head>
	  <meta charset="utf-8">
		
		<!-- PAGE TITLE -->		
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		

		<meta name="keywords" content="PLEASE ENTER YOUR KEYWORDS HERE" />
		<meta name="description" content="PLEASE ENTER YOUR KEYWORDS HERE" />
		<!-- Set the viewport width to device width for mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		

		<!-- FAVICON -->	
		<link rel="icon" type="image/png" href="http://EXAMPLE.com/favicon.png" />

		<!-- IE Fix (JS) for HTML5 Tags -->
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<section id="wrapper">
			<header>
				<hgroup>
					<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>

				<nav id="main-nav" role="navigation">
					<?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
				</nav><!-- #main-nav -->
			</header>
