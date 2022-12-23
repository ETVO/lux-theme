<?php

function lux_no_caminho($attrs)
{
    $attrs = shortcode_atts([], $attrs);

    $text = get_theme_mod('lux_no_caminho_text');
    $image = get_theme_mod('lux_no_caminho_image');

    $link_consultoria = get_theme_mod('link_consultoria');
    $link_trabalhar = get_theme_mod('link_trabalhar');

    $logo_dark = THEME_IMG_URI . '/lux-black.png';


    ob_start(); // Start HTML buffering

?>
    <div class="lux_no_caminho">
        <div class="container default-lux">
            <div class="spheres"></div>
            <h2 class="title">
                Uma
                <img src="<?php echo $logo_dark; ?>" alt="" class="logo">
                no seu caminho!
            </h2>

            <div class="text">
                <?php echo $text; ?>
            </div>

            <div class="wrap d-flex flex-column flex-md-row">
                <div class="image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <div class="action flex-fill">
                    <div class="inner">
                        <a href="<?php echo $link_consultoria; ?>" class="btn-cta format-strong format-break">
                            <div>Quero uma</div>
                            <strong>consultoria de marketing</strong>
                        </a>
                        <a href="<?php echo $link_trabalhar; ?>" class="btn-cta format-strong format-break">
                            <div>Quero</div>
                            <strong>trabalhar com a Lux Digital</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
