<?php
/* 
Template Name: Sucesso Ebook 
Template Post Type: page 
*/

get_header('mktmedico');

?>

<div class="sucesso py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 capa">
                <img src="<?php echo THEME_IMG_URI . 'mockup-ebook-mkt-medico.png' ?>" alt="">
            </div>

            <div class="col-12 col-lg-8 content d-flex align-items-center">
                <div class="content-wrap m-auto m-lg-0">
                    <h1 class="title">Parabéns!</h1>

                    <p>Agora você possui uma cópia exclusiva deste e-book!</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 

$social = get_theme_mod('social_icons');

$whatsapp = get_theme_mod('info_whatsapp');
$whatsapp_link = str_replace($chars, '', $whatsapp);
$whatsapp = str_replace('(', '<small>', $whatsapp);
$whatsapp = str_replace(')', '</small>', $whatsapp);

?>

<div class="contacts d-flex">
    <div class="container content py-3 m-auto">
        <div class="text-center mb-3">
            Mantenha-se atualizado das nossas próximas novidades!
        </div>
        <div class="pt-2 text-center">
            <div class="social mb-2">
                <?php foreach ($social as $link) : ?>
                    <a class="link" href="<?php echo $link['url']; ?>" title="<?php echo $link['icon']; ?>" target="_blank">
                        <span class="bi-<?php echo $link['icon']; ?>"></span>
                    </a>
                <?php endforeach; ?>
            </div>


            <div class="link mb-2">
                <a href="<?php echo home_url(); ?>" target="_blank" class="text-dark mb-2" title="<?php echo bloginfo('site_title'); ?>">
                    <span class="text">
                        luxdigital.pt
                    </span>
                </a>
            </div>

            <div class="link">
                <a href="https://wa.me/<?php echo $whatsapp_link; ?>" target="_blank" class="text-dark mb-2" title="WhatsApp">
                    <span class="icon bi-whatsapp"></span>&nbsp;
                    <span class="text">
                        <?php echo $whatsapp; ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>