<?php

/**
 * Page template
 * 
 * @package WordPress
 */

get_header();

$social = get_theme_mod('social_icons');

$phone = get_theme_mod('info_telefone');
$whatsapp = get_theme_mod('info_whatsapp');
$email = get_theme_mod('info_email');

$chars = ['(', ')', ' ', '-', '+'];
$phone_link = str_replace($chars, '', $phone);
$whatsapp_link = str_replace($chars, '', $whatsapp);

$phone = str_replace('(', '<small>', $phone);
$phone = str_replace(')', '</small>', $phone);
$whatsapp = str_replace('(', '<small>', $whatsapp);
$whatsapp = str_replace(')', '</small>', $whatsapp);

if (substr($whatsapp_link, 0, 3) != '351') $whatsapp_link = '351' . $whatsapp_link;

?>
<div class="container mt-5 mb-4 soon">
    <div class="d-flex">
        <div class="m-auto">

            <div class="text-center">
                <div class="logo mb-4">
                    <img class="custom-logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="">
                </div>
                <h2 class="fs-4 mb-4"><?php echo bloginfo('description'); ?></h2>
            </div>

            <div class="d-flex flex-column mb-4">
                <div class="social m-auto mb-4">
                    <?php foreach ($social as $link) : ?>
                        <a class="link" href="<?php echo $link['url']; ?>" title="<?php echo $link['icon']; ?>" target="_blank">
                            <span class="mx-2 fs-3 bi-<?php echo $link['icon']; ?>"></span>
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="contacts m-auto text-left">
                    <div class="link">
                        <a href="tel:<?php echo $phone_link; ?>" target="_blank" class="text-dark mb-2" title="Telefone (Portugal)">
                            <span class="icon bi-telephone-fill"></span>&nbsp;
                            <span class="text">
                                <?php echo $whatsapp; ?>
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
                    <div class="link">
                        <a href="mailto:<?php echo $email; ?>" target="_blank" class="text-dark mb-2" title="Email">
                            <span class="icon bi-envelope-fill"></span>&nbsp;
                            <span class="text">
                                <?php echo $email; ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <a class="btn btn-primary quem-somos-btn mx-auto rounded-pill" href="#quemSomos" role="button">
                    Quem Somos
                </a>
                &nbsp;
                <a class="btn btn-primary quem-somos-btn mx-auto rounded-pill" href="#faleConosco" role="button">
                    Fale Conosco
                </a>
            </div>

            <div class="d-block text-left pt-2 mb-5" id="quemSomos">
                <h3 class="fs-2 fw-extrabold">QUEM SOMOS</h3>

                <p>Somos profissionais especializados em Marketing de <a href="https://www.instagram.com/p/CfW5KJquAUD/" target="_blank">Saúde</a>, <a href="https://www.instagram.com/p/CfW43ODpbJz/" target="_blank">Bem-estar</a> e <a href="https://www.instagram.com/p/CfW4WHAp5h2/" target="_blank">Bem-viver</a>. Nossa missão é ser o seu aliado na promoção de conteúdos que proporcionem mais qualidade de vida e estimulem a busca pelos cuidados com a saúde e a longevidade.</p>

                <p class="ps-3 fs-5">Sabemos que o trabalho estrategicamente orientado, com foco na otimização dos conteúdos, é a melhor forma de colocar a sua comunicação ao serviço do seu público alvo.</p>

                <p>Por isso, oferecemos um método de atendimento diferenciado, baseado no desenvolvimento de um <a class="fw-bold" href="#faleConosco" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Quer saber mais?<br><b>Fale Conosco!</b>">Projeto Estratégico</a> individualizado para cada um de nossos parceiros. Assim, somos capazes de perceber as particularidades do seu negócio e do seu público, para colocar a sua empresa na rota de decisão dos seus potenciais pacientes.</p>
            </div>

            <hr>

            <div class="text-left d-flex mt-4 pt-2 flex-column flex-lg-row" id="faleConosco">
                <div class="m-auto mb-3">
                    <h3 class="fs-2 fw-extrabold mb-3">VAMOS CONVERSAR SOBRE A SUA <mark>ESTRATÉGIA</mark>?</h3>
                    <p class="fs-4 mb-1">Juntos, criaremos um <b>Projeto de Marketing</b> eficaz e bem direcionado.</p>
                    <p>Sem desperdiçar tempo ou recursos.
                        <br>Com o embasamento de muita experiência prática e muito conhecimento teórico e técnico.
                    </p>
                </div>
                <div class="form m-auto">
                    <?php echo do_shortcode('[contact-form-7 id="16" title="Vamos falar sobre a sua estratégia?"]') 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
