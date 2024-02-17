<?php
/**
 *  Ajax Calls
 *
 * @package baby-store
 */

namespace BABY_STORE_THEME\Inc;

use BABY_STORE_THEME\Inc\Traits\Singleton;

class Ajax
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
        add_action('wp_ajax_search',[$this,'search_callback']);
        add_action('wp_ajax_nopriv_search',[$this,'search_callback']);
    }

    public function search_callback() {
        // Check if the search query is set in the GET request
        if (isset($_POST['search_query'])) {
            // Sanitize the search query (optional, but recommended)
            $search_query = sanitize_text_field($_POST['search_query']);

            // Perform search operations, e.g., querying the database
            // For demonstration purposes, let's just return the search query as JSON
            echo json_encode($search_query);
        } else {
            // If search query is not set, return an error message
            echo json_encode(array('error' => 'Search query is not provided'));
        }
        // Always remember to exit after outputting JSON
        wp_die();
    }
}