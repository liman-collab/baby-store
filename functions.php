<?php
/**
 * @package baby-store
 */

function baby_store_theme_enqueue_style()
{
    // Check if your theme is currently active
    if ('baby-store' === get_option('template')) {
        // Enqueue your custom theme's style.css file
        wp_enqueue_style('style-css',
            get_stylesheet_uri(),
            [],
            filemtime(get_template_directory() . '/style.css'),
            'all');

        wp_enqueue_script('main-js',
            get_template_directory_uri(),
            [],
            filemtime(get_template_directory() . '/assets/js/main.js'));
    }
}

add_action('wp_enqueue_scripts', 'baby_store_theme_enqueue_style');