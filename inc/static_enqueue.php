<?php
/**
 * Enqueue site scripts and styles
 */
function singleland_scripts() {

    /**
     * Enqueueing Stylesheets
     */
	wp_enqueue_style( 'singleland-fonts', singleland_fonts_url() );
	wp_enqueue_style( 'mediaelementplayer', SINGLELAND_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', SINGLELAND_VEND . '/fontawesome-free-6.0.0-web/css/all.min.css' );
	wp_enqueue_style( 'icomoon-theme', SINGLELAND_VEND . '/icomoon/style.css' );
	wp_enqueue_style( 'nice-select', SINGLELAND_VEND . '/nice-select/nice-select.css' );
	wp_enqueue_style( 'bootstrap', SINGLELAND_CSS . '/bootstrap.min.css' );
	wp_enqueue_style( 'singleland-woocommerce', SINGLELAND_CSS . '/woocommerce.min.css' );
	wp_enqueue_style( 'singleland-main-style', get_theme_file_uri('/assets/css/style.min.css'), array(), SINGLELAND_VERSION );
	wp_enqueue_style( 'singleland-custom-style', get_theme_file_uri('/assets/css/custom.css'), array(), SINGLELAND_VERSION );

	wp_enqueue_style( 'singleland-root', get_stylesheet_uri(), array(), SINGLELAND_VERSION );
    wp_style_add_data( 'singleland-root', 'rtl', 'replace' );


    /**
     * Enqueueing Scripts
     */
	wp_enqueue_script( 'mediaelement-and-player', SINGLELAND_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
	wp_enqueue_script( 'parallaxie', SINGLELAND_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'nice-select', SINGLELAND_VEND. '/nice-select/jquery.nice-select.min.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'singleland-main-js', SINGLELAND_JS . '/main.js', array('jquery'), SINGLELAND_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'singleland_scripts' );