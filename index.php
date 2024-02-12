<?php
/**
 * @package baby-store
 */
?>

<?php get_header(); ?>

<div class="content">
    <div class="w-100 text-center d-flex justify-content-center align-items-center">
        <div class="bg-dark w-100"><hr style="height: 5px;background-color: #EABD90" class="m-0 border-0 opacity-100"></div>
        <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/butterflies-top.png' ?>" height="<?php echo wp_is_mobile() ? '150' : '250' ?>" alt="baby_equipment" class="mx-3">
        <div class="bg-dark w-100"><hr style="height: 5px;background-color: #EABD90" class="m-0 border-0 opacity-100"></div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="<?php echo BABY_STORE_DIR_URI . '/assets/images/banner_1.png' ?>" style="<?php echo wp_is_mobile() ? 'height: 250px;' : 'height: 600px;' ?>"  alt="baby_banner">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<?php get_footer();
