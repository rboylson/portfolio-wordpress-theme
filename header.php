<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="../favicon.ico" sizes="any">
	<title>Rachel Boylson</title>


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
			<div class="dropdown-wrapper">
				<a href="<?php echo (is_home() ? '#portfolio' : '/#portfolio') ?>"onclick="closeNav()">Portfolio</a>

	  		    <div class="dropdown-content">
					<?php
					$navigation_attributes = shortcode_atts( array(
						'menu_id' => '3',
					), $attributes );

					$menu_items = wp_get_nav_menu_items( $navigation_attributes['menu_id'] );
					$menu_html = '';

					for ( $x = 0; $x < count( $menu_items ); $x++ ) {

						$url = $menu_items[ $x ]->url;
						$title = $menu_items[ $x ]->title;

						$menu_html .= '<a href="';
						$menu_html .= esc_attr( esc_url( $url ) );
						$menu_html .= '">';
						$menu_html .= wp_kses_post( $title );
						$menu_html .= '</a>';
					}

					echo
					'<div id="menuWrapper">'
						. $menu_html .
					'</div>';
					?>
	  		    </div>
  		  	</div>
			<a href="<?php echo (is_home() ? '#about' : '/#about') ?>" onclick="closeNav()">About</a>
			<a href="#contact" onclick="closeNav()" onclick="closeNav()">Contact</a>
			<div id="menu-line"></div>
		</div>
	</div>
</div>
