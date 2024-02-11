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
    <title>$Title$</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php

if (function_exists('wp_body_open')){
    wp_body_open();
}
?>

<header>Header</header>


