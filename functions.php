<?php
/**
 * @package baby-store
 */


if (! defined('BABY_STORE_DIR_PATH')){
    define('BABY_STORE_DIR_PATH',untrailingslashit(get_template_directory()));
}

require_once BABY_STORE_DIR_PATH . './inc/helpers/autoloader.php';

function baby_store_get_theme_instance()
{
    \BABY_STORE_THEME\Inc\BABY_STORE_THEME::get_instance();
}

baby_store_get_theme_instance();
function baby_store_theme_enqueue_style()
{
    // Check if your theme is currently active
    if ('baby-store' === get_option('template')) {

        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');

        wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/lib/css/bootstrap.css', [], false, 'all');

        wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);

        wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/lib/js/bootstrap.js', ['jquery'], false, true);

        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}

add_action('wp_enqueue_scripts', 'baby_store_theme_enqueue_style');