<?php
/**
 *  Enqueue theme assets
 *
 * @package baby-store
 */

namespace BABY_STORE_THEME\Inc;

use BABY_STORE_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //load classes
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions
         *
         */

        add_action('wp_enqueue_scripts',[$this,'register_styles']);
        add_action('wp_enqueue_scripts',[$this,'register_scripts']);
    }
    public function register_styles()
    {
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(BABY_STORE_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', BABY_STORE_DIR_URI . '/assets/src/lib/css/bootstrap.css', [], false, 'all');
        wp_register_style('font-css', BABY_STORE_DIR_URI . '/assets/src/lib/fonts/font.css', [], false, 'all');

        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('font-css');
    }

    public function register_scripts()
    {
        wp_register_script('main-js', BABY_STORE_DIR_URI . '/assets/js/main.js', [], filemtime(BABY_STORE_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('bootstrap-js', BABY_STORE_DIR_URI . '/assets/src/lib/js/bootstrap.js', ['jquery'], false, true);

        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }

}