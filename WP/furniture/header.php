<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php
load_theme_textdomain( 'your-theme', TEMPLATEPATH . '/languages' ); ?>

<head>
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed. 
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'furniture' ), max( $paged, $page ) );

	?>

</title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/stylesheets/base.css">
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/stylesheets/skeleton.css">
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">

<!-- <link rel="stylesheet" type="text/css" media="all" href="style.css">
-->
<script src="<?php bloginfo("template_url"); ?>/javascripts/jquery171.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/javascripts/jquery.flexslider.js"></script>
<script src="<?php bloginfo("template_url"); ?>/javascripts/whatever.js"></script>
</head>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

<!-- HEADER -->
	<div class="band head">
		<div class="container">
			<div class="sixteen columns">
			</div>
		</div>
	</div>

	<div class="band header">
		<header class="container main">
			<div class="eight columns">
				<h1 class="logo"><a href="">Furniture</a></h1>
			</div>

			<div class="eight columns">
				<p class="login"><a href="#">LOGIN</a> &nbsp;| &nbsp;<a href="#">SIGN UP</a></p>
				<p class="cart"><img src="<?php bloginfo("template_url"); ?>/images/cart.png"> Shopping cart : now in your cart 0 items</p>
			</div>

		</header>
	</div>
	
	
	<div class="band navigation">
		<nav class="container primary">
			<div class="sixteen columns">
				<ul>
				<!--
				<li><a href="#">Home </a></li>
				<li><a href="#">Products </a></li>
				<li><a href="#">Special </a></li>
				<li><a href="#">Offers </a></li>
				<li><a href="#">News </a></li>
				<li><a href="#">Contact Us </a></li>
				<li><a href="#">Faqs</a></li>
				-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				</ul>
				<div class="search">
				<input type="text" class="input"><img src="<?php bloginfo("template_url"); ?>/images/search.png" class="img">
				</div>
			</div>
		</nav>
	</div>

<!-- END HEADER -->
