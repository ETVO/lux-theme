<?php
/* 
Template Name: Ebook Mkt Médico 
Template Post Type: page 
*/

get_header('mktmedico');

?>

<div class="hero pt-4 pb-5">
    <div class="container">
        <div class="logo mb-4">
            <a href="<?php echo home_url(); ?>"><img class="custom-logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt=""></a>
        </div>

        <div class="row">
            <div class="col-12 col-lg-7 content pe-lg-5">

                <h1 class="subtitle mb-2 d-inline-block text-uppercase fs-5">
                    E-BOOK GRATUITO
                </h1>
                <h1 class="title">
                    Um guia DEFINITIVO para transformar e fortalecer a comunicação e a autoridade de clínicas, consultórios e hospitais
                </h1>

                <p>Se você é profissional clínico, pode contar com a ajuda do Google e das Redes Sociais para promover mais saúde e qualidade de vida aos seus pacientes, seja no mundo digital ou no real.</p>
            </div>
            <div class="col-12 col-lg-5 form">
                <div class="form-wrap">

                    <h2 class="fw-bold mb-4">Obtenha sua cópia grátis!</h2>

                    <style type="text/css" scoped>
                        .mauticform-field-hidden {
                            display: none
                        }
                    </style>

                    <div id="mauticform_wrapper_ebookmarketingmedico" class="mauticform_wrapper">
                        <form autocomplete="false" role="form" method="post" action="https://emkt.luxdigital.pt/form/submit?formId=1" id="mauticform_ebookmarketingmedico" data-mautic-form="ebookmarketingmedico" enctype="multipart/form-data">
                            <div class="mauticform-error" id="mauticform_ebookmarketingmedico_error"></div>
                            <div class="mauticform-message" id="mauticform_ebookmarketingmedico_message"></div>
                            <div class="mauticform-innerform">

                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div class="row">
                                        <div id="mauticform_ebookmarketingmedico_nome" data-validate="nome" data-validation-type="text" class="mb-3 col mauticform-text mauticform-field-1 mauticform-required">
                                            <label id="mauticform_label_ebookmarketingmedico_nome" for="mauticform_input_ebookmarketingmedico_nome" class="form-label">Nome</label>
                                            <input id="mauticform_input_ebookmarketingmedico_nome" name="mauticform[nome]" value="" class="form-control" type="text">
                                            <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                        </div>

                                        <div id="mauticform_ebookmarketingmedico_sobrenome" data-validate="sobrenome" data-validation-type="text" class="mb-3 col mauticform-text mauticform-field-2 mauticform-required">
                                            <label id="mauticform_label_ebookmarketingmedico_sobrenome" for="mauticform_input_ebookmarketingmedico_sobrenome" class="form-label">Sobrenome</label>
                                            <input id="mauticform_input_ebookmarketingmedico_sobrenome" name="mauticform[sobrenome]" value="" class="form-control" type="text">
                                            <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                        </div>
                                    </div>

                                    <div id="mauticform_ebookmarketingmedico_email" data-validate="email" data-validation-type="email" class="mb-3 mauticform-email mauticform-field-3 mauticform-required">
                                        <label id="mauticform_label_ebookmarketingmedico_email" for="mauticform_input_ebookmarketingmedico_email" class="form-label">Email</label>
                                        <input id="mauticform_input_ebookmarketingmedico_email" name="mauticform[email]" value="" class="form-control" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_ebookmarketingmedico_whatsapp" data-validate="whatsapp" data-validation-type="tel" class="mb-3 mauticform-tel mauticform-field-4 mauticform-required">
                                        <label id="mauticform_label_ebookmarketingmedico_whatsapp" for="mauticform_input_ebookmarketingmedico_whatsapp" class="form-label">WhatsApp</label>
                                        <input id="mauticform_input_ebookmarketingmedico_whatsapp" name="mauticform[whatsapp]" value="" class="form-control" type="tel">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_ebookmarketingmedico_sua_atuacao" data-validate="sua_atuacao" data-validation-type="select" class="mb-3 mauticform-select mauticform-field-5 mauticform-required">
                                        <label id="mauticform_label_ebookmarketingmedico_sua_atuacao" for="mauticform_input_ebookmarketingmedico_sua_atuacao" class="form-label">Sua atuação</label>
                                        <select id="mauticform_input_ebookmarketingmedico_sua_atuacao" name="mauticform[sua_atuacao]" value="" class="form-select">
                                            <option disabled selected>-- Selecione uma opção --</option>
                                            <option value="Policlínica">Policlínica</option>
                                            <option value="Individual">Consultório individual</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="Outro">Outro</option>
                                        </select>
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_ebookmarketingmedico_qual" data-mautic-form-show-on="sua_atuacao:Outro" data-mautic-form-expr="in" class="mb-3 mauticform-text mauticform-field-5  mauticform-field-hidden">
                                        <label id="mauticform_label_ebookmarketingmedico_qual" for="mauticform_input_ebookmarketingmedico_qual" class="form-label">Qual?</label>
                                        <input id="mauticform_input_ebookmarketingmedico_qual" name="mauticform[qual]" value="" class="form-control" type="text">
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_ebookmarketingmedico_submit" class="pt-3 mauticform-button-wrapper mauticform-field-6">
                                        <button type="submit" name="mauticform[submit]" id="mauticform_input_ebookmarketingmedico_submit" value="" class="mauticform-button btn btn-primary btn-submit">Baixe E-book Gratuito</button>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="mauticform[formId]" id="mauticform_ebookmarketingmedico_id" value="1">
                            <input type="hidden" name="mauticform[return]" id="mauticform_ebookmarketingmedico_return" value="">
                            <input type="hidden" name="mauticform[formName]" id="mauticform_ebookmarketingmedico_name" value="ebookmarketingmedico">

                        </form>

                        <small class="mt-2 d-block text-center"><span class="bi-shield-fill-check"></span>&nbsp;&nbsp;Nós respeitamos a sua privacidade.</small>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

<div class="sobre py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 capa">
                <img src="<?php echo THEME_IMG_URI . 'mockup-ebook-mkt-medico.png' ?>" alt="">
            </div>

            <div class="col-12 col-lg-8 content d-flex align-items-center">
                <div class="content-wrap m-auto">
                    <h2 class="title">O que você vai encontrar aqui</h2>

                    <div class="icons d-flex flex-column flex-lg-row justify-content-around">
                        <div class="icon">
                            <div class="bi-diagram-3"></div>
                            <div class="text">
                                Como funcionam os algoritmos para o Marketing de Saúde
                            </div>
                        </div>
                        <div class="icon">
                            <div class="bi-patch-check"></div>
                            <div class="text">
                                O <em>Permitido x Proibido</em> no Marketing Médico
                            </div>
                        </div>
                        <div class="icon">
                            <div class="bi-trophy"></div>
                            <div class="text">
                                Como produzir conteúdo de qualidade e ficar no topo do Google
                            </div>
                        </div>
                    </div>
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