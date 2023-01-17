<?php

function redes_lux($attrs)
{
    $attrs = shortcode_atts([], $attrs);


    $social = get_theme_mod('social_icons');

    $whatsapp = get_theme_mod('info_whatsapp');

    $whatsapp_url = preg_replace('/[^0-9]/', '', $whatsapp);
    $whatsapp_url = 'https://api.whatsapp.com/send/?phone=' . $whatsapp_url;

    if ($whatsapp) {
        array_push($social, array(
            'url' => $whatsapp_url,
            'icon' => 'whatsapp'
        ));
    }

    ob_start(); // Start HTML buffering

?>
    <div class="redes_lux">
        <div class="title">
            Estamos em muitos canais.
        </div>
        <div class="social-icons">
            <?php foreach ($social as $link) : ?>
                <a href="<?php echo $link['url']; ?>" title="<?php echo $link['icon']; ?>" target="_blank">
                    <span class="bi-<?php echo $link['icon']; ?>"></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
