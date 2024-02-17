<?php
/**
 * Header Template
 *
 * @package baby-store
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Store E-commerce</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php

if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<div id="page" class="site">
<!--    <div class="bg-dark justify-content-center align-items-center d-flex p-2"><span class="text-light">28:25:68s Gift Cards</span></div>-->
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">

