<?php
/**
 * Bootstraps the Theme.
 *
 * @package baby-store
 */

namespace BABY_STORE_THEME\Inc;

use BABY_STORE_THEME\Inc\Traits\Singleton;

class BABY_STORE_THEME
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         *
         */

        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
    }
}