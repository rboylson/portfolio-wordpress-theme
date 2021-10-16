<?php

add_action( 'wp_enqueue_scripts', 'rmb_portfolio_scripts' );
add_shortcode( 'wpdocs_custom_navigation', 'wpdocs_add_custom_navigation' );

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


function rmb_portfolio_scripts() {

	// styles
	wp_enqueue_style( 'rmb_portfolio-style', get_stylesheet_uri() );
	wp_enqueue_style( 'rmb_portfolio-font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', true );

    // font
    wp_enqueue_style( 'rmb-google-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@500,700@0;1&family=Montserrat:wght@100;400;600&display=swap', false );

	// jQuery
	wp_enqueue_script( 'rmb_portfolio-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', true );

	// javascript
	wp_enqueue_script( 'rmb_portfolio-scripts', get_template_directory_uri() . '/js/scripts.js', true );
	wp_enqueue_script( 'rmb_portfolio-scripts-footer', get_template_directory_uri() . '/js/footer.js', true );

    if (is_home()) {
        wp_enqueue_script( 'rmb_portfolio-scripts-homepage', get_template_directory_uri() . '/js/scripts-homepage.js', true );
    }

    if (is_single()) {
        wp_enqueue_script( 'rmb_portfolio-scripts-single', get_template_directory_uri() . '/js/scripts-single.js', true );
    }

	// gsap
	wp_enqueue_script( 'rmb_portfolio-gsap-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', false );
	wp_enqueue_script( 'rmb_portfolio-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', false );

}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
