<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Rachel Boylson | Front End Developer</title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<div id="navigation">
	<div class="navigation-content">
		<div id="logo" class="part1">
			<a href="/<?php echo (is_home() ? '#home' : '') ?>" onclick="closeNav()">RB</a>
		</div>
		<a id="open" onclick="openNav()">☰</a>
		<a id="close" onclick="closeNav()">✕</a>
		<div id="menu" class="part1">
			<a href="/<?php echo (is_home() ? '#home' : '') ?>" onclick="closeNav()">Home</a>
			<a href="<?php echo (is_home() ? '#about' : '/#about') ?>" onclick="closeNav()">About</a>
			<a href="<?php echo (is_home() ? '#portfolio' : '/#portfolio') ?>"onclick="closeNav()">Projects</a>
			<a href="#contact" onclick="closeNav()" onclick="closeNav()">Contact</a>
			<div id="menu-line"></div>
		</div>
	</div>
</div>
