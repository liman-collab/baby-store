<?php
/**
 * @package baby-store
 */


if (! defined('BABY_STORE_DIR_PATH')){
    define('BABY_STORE_DIR_PATH',untrailingslashit(get_template_directory()));
}
if (! defined('BABY_STORE_DIR_URI')){
    define('BABY_STORE_DIR_URI',untrailingslashit(get_template_directory_uri()));
}

require_once BABY_STORE_DIR_PATH . './inc/helpers/autoloader.php';

function baby_store_get_theme_instance()
{
    \BABY_STORE_THEME\Inc\BABY_STORE_THEME::get_instance();
}

baby_store_get_theme_instance();
