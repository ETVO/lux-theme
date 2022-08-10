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

    <meta name="description" content="Um guia DEFINITIVO para transformar e fortalecer a comunicação e a autoridade de clínicas, consultórios e hospitais" />
    <meta name="robots" content="all" />

    <link rel="stylesheet" href="<?php echo THEME_CSS_URI . 'mktmedico.css'; ?>">
</head>
<script type="text/javascript">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://emkt.luxdigital.pt/media/js/mautic-form.js?v06515ee6';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://emkt.luxdigital.pt';
        var MauticLang   = {
            'submittingMessage': "Por favor, aguarde..."
        }
    }else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
</script>


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
    
