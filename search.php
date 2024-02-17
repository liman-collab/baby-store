<?php
/**
 * Template Name: Search Page
 *
 * @package baby-store
 */

get_header(); ?>

    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                // Retrieve the search query parameter from the URL
                $search_query = isset($_GET['query']) ? sanitize_text_field($_GET['query']) : '';

                // Perform custom search query based on the search query
                $search_results = new WP_Query(array(
                    'post_type' => ['post','product'], // Customize post type as needed
                    's' => $search_query,
                ));

                echo '<h5>Found Posts:' . $search_results->found_posts.'</h5>';

                // Display search results
                if ($search_results->have_posts()) :
                    while ($search_results->have_posts()) :
                        $search_results->the_post();
                        ?>
                          <div class="border rounded-3 gap-3 p-3 my-2 d-flex">
                              <div>
                                  <img src="<?php the_post_thumbnail_url(); ?>" width="80" alt="">
                              </div>
                                <div>
                                    <a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>
                                    <?php the_excerpt(); ?>
                                </div>
                          </div>
                    <?php
                        endwhile;

                    // Restore original post data
                    wp_reset_postdata();

                else :
                    // No search results found
                    echo '<p>No results found.</p>';
                endif;
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
