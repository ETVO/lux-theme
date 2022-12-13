<?php

/**
 * Header component
 * 
 * @package WordPress
 */

$portal_cliente = get_theme_mod('portal_cliente');

?>

<header class="navbar navbar-expand-md" id="header">
    <div class="container flex-row-reverse flex-md-column">
        <div class="navbar-brand p-0 mb-0 me-0 me-md-auto mb-md-4 mx-auto">
            <?php the_custom_logo(); ?>
        </div>

        <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenuDropdown" aria-controls="mainMenuDropdown" aria-expanded="false" aria-label="<?php echo __("Menu") ?>">
            <span class="icon bi bi-list"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainMenuDropdown">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'main_menu',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav',
                    'walker'            => new BS_Menu_Walker()
                )
            );
            ?>
            <?php if($portal_cliente) : ?>
            <div class="link-cliente">
                <a href="<?php echo $portal_cliente; ?>" class="btn-cta">
                    Cliente
                </a>
            </div>
            <?php endif; ?>
        </div>


    </div>
</header>