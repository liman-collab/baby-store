<?php


function baby_store_theme_enqueue_style() {
    // Check if your theme is currently active
    if ( 'baby-store' === get_option( 'template' ) ) {
        // Enqueue your custom theme's style.css file
        wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
    }
}
add_action( 'wp_enqueue_scripts', 'baby_store_theme_enqueue_style' );