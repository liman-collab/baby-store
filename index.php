<?php
/**
 * @package baby-store
 */
?>

<?php get_header(); ?>

    <div class="content">
    <div class="w-100 text-center d-flex justify-content-center align-items-center">
        <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/line.png' ?>" height="100" alt="line"
             class="mx-3 d-none d-md-block">
        <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/butterflies-top.png' ?>"
             height="<?php echo wp_is_mobile() ? '150' : '250' ?>" alt="baby_equipment" class="mx-3">
        <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/line.png' ?>" height="100" alt="line"
             class="mx-3 d-none d-md-block">
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/banner_1.png' ?>"
                     style="<?php echo wp_is_mobile() ? 'height: 250px;' : 'height: 600px;' ?>" alt="baby_banner1">
            </div>
            <div class="carousel-item text-center">
                <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/banner_2.png' ?>"
                     style="<?php echo wp_is_mobile() ? 'height: 250px;' : 'height: 600px;' ?>" alt="baby_banner2">
            </div>
            <div class="carousel-item text-center">
                <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/banner_3.png' ?>"
                     style="<?php echo wp_is_mobile() ? 'height: 250px;' : 'height: 600px;' ?>" alt="baby_banner3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <div class="text-center">
            <h3>OUR CATEGORIES</h3>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col text-center">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/products/spoon.png' ?>" height="100"
                         alt="line"/>
                </div>
                <div class="col text-center">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/products/shampoo.png' ?>" height="100"
                         alt="line"/>
                </div>
                <div class="col text-center">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/products/spoon.png' ?>" height="100"
                         alt="line"/>
                </div>
                <div class="col text-center">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/products/baby.png' ?>" height="100"
                         alt="line"/>
                </div>
                <div class="col text-center">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/products/spoon.png' ?>" height="100"
                         alt="line"/>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-5 ">
        <div class="text-center">
            <h3>CRIBS & BASKETS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, illo!</p>
        </div>
        <div class="mt-5 d-md-flex gap-3 text-center justify-content-center">
            <?php get_template_part('template-parts/cards/card'); ?>
            <?php get_template_part('template-parts/cards/card'); ?>
            <?php get_template_part('template-parts/cards/card'); ?>
            <?php get_template_part('template-parts/cards/card'); ?>
        </div>
    </div>
    <div class="container-fluid mt-5 p-5" style="background: #F7F3F0;">
        <div class="text-center">
            <h3>HAPPY CUSTOMERS</h3>
        </div>
        <div class="mt-5 d-flex gap-3 justify-content-center">
            <?php get_template_part('template-parts/cards/testimonial'); ?>
            <?php get_template_part('template-parts/cards/testimonial'); ?>
            <?php get_template_part('template-parts/cards/testimonial'); ?>
        </div>
    </div>



<?php get_footer();
