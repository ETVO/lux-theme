<?php
/**
 * Header template
 * 
 * @package WordPress
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="head"></div>

    <?php wp_body_open(); ?>
    
    <?php get_template_part("partials/header"); ?>