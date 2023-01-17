<?php

/**
 * Footer component
 * 
 * @package WordPress
 */

$footer_logo = get_theme_mod('footer_logo');

$social = get_theme_mod('social_icons');

$whatsapp = get_theme_mod('info_whatsapp');
$phone = get_theme_mod('info_phone');
$email = get_theme_mod('info_email');

$email_url = "mailto:" . $email;

$phone_url = "tel:" . preg_replace('/[^0-9]/', '', $phone);

$whatsapp_url = preg_replace('/[^0-9]/', '', $whatsapp);
$whatsapp_url = 'https://api.whatsapp.com/send/?phone=' . $whatsapp_url;

$whatsapp = get_theme_mod('info_whatsapp');

$portal_cliente = get_theme_mod('portal_cliente');

?>

<div class="cookies-consent" id="cookiePopup">
    <div class="heading">
        <img src="<?php echo get_site_icon_url(); ?>">
        <b>Este site utiliza cookies.</b>
    </div>
    <div class="text">
        Ao navegar, você está concordando com o armazenamento e uso de cookies em nosso site.
    </div>
    <div class="action">
        <button class="btn btn-outline-primary" id="cookieAccept">aceitar</button>
    </div>
</div>

<div class="rainbow">
    <div class="strip yellow"></div>
    <div class="strip purple"></div>
    <div class="strip green"></div>
    <div class="strip pink"></div>
    <div class="strip black"></div>
</div>

<footer>

    <div class="container default-lux">
        <div class="footer-1 d-flex justify-content-between align-items-center">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="social-icons">
                <?php foreach ($social as $link) : ?>
                    <a href="<?php echo $link['url']; ?>" title="<?php echo $link['icon']; ?>" target="_blank">
                        <span class="bi-<?php echo $link['icon']; ?>"></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer-2 d-flex justify-content-between flex-column flex-lg-row">
            <div class="contacts col-12 col-lg-4">
                <h4>Contactos</h4>
                <div class="contact-icons">
                    <!-- WhatsApp -->
                    <a href="<?php echo $whatsapp_url; ?>">
                        <span class="icon bi-whatsapp"></span>
                        <span class="text"><?php echo $whatsapp; ?></span>
                    </a>

                    <!-- Telefone -->
                    <a href="<?php echo $phone_url; ?>">
                        <span class="icon bi-phone"></span>
                        <span class="text"><?php echo $phone; ?></span>
                    </a>

                    <!-- Email -->
                    <a href="<?php echo $email_url; ?>">
                        <span class="icon bi-envelope"></span>
                        <span class="text"><?php echo $email; ?></span>
                    </a>
                </div>

                <?php if($portal_cliente): ?>
                <div class="link-cliente my-3">
                    <a href="<?php echo $portal_cliente; ?>">
                        <span class="icon bi-person-fill"></span>
                        <span>Portal do Cliente</span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <div class="recent-posts col-12 col-lg-8 mt-4 mt-lg-0">
                <?php
                    get_template_part('partials/blog/footer-feed');
                ?>
            </div>
        </div>
    </div>
</footer>
<div class="bottom">
    <div class="container default-lux d-flex">
        <span class="text-start">
            <?php echo date('Y') ?> © <a class="fw-bold" href="<?php echo home_url(); ?>">Lux Digital</a>.
            <br class="d-block d-sm-none">
            Todos os direitos reservados.
        </span>
    </div>
</div>