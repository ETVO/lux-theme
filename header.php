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

    <meta name="description" content="Consultoria especializada de marketing digital e estratégia. +10 anos de experiência em marketing de conteúdo." />
    <meta name="robots" content="all" />
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-02QG7VWEC2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-02QG7VWEC2');
</script>

<body <?php body_class(); ?>>

    <div id="head"></div>

    <?php wp_body_open(); ?>
    
