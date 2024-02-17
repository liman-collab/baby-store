<?php

/**
 *
 * Header Navigation Template
 *
 * @package baby-store
 *
 */

?>

<nav class="navbar navbar-expand-lg" style="background: #F7F3F0;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>
            <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-md-5" style="place-content: center;" id="navbarScroll">
            <ul class="navbar-nav gap-md-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo home_url()?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STORE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-sm-flex align-items-center gap-3">
            <div>
                <span>
                    Login
                </span>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Search</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="search-input" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="<?php echo BABY_STORE_DIR_URI . '/assets/icons/search.png' ?>" height="20" alt="search-logo">

                </button>
            </div>
<!--            <div class="">-->
<!--                <span>-->
<!--                    <img src="--><?php //echo BABY_STORE_DIR_URI . '/assets/icons/facebook.png' ?><!--" height="25" alt="facebook-logo">-->
<!--                </span>-->
<!--                <span>-->
<!--                    <img src="--><?php //echo BABY_STORE_DIR_URI . '/assets/icons/twitter.png' ?><!--" height="25" alt="twitter-logo">-->
<!--                </span>-->
<!--            </div>-->
            </div>
    </div>
</nav>
