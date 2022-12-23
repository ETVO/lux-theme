<?php

/**
 * 404 error page template
 * 
 * @package WordPress
 */

get_header();

?>
<div class="inner-404 flex-fill d-flex px-2 py-5">

    <div class="m-auto text-center">
        <h1 class="text-primary" style="font-weight: 700; font-size: 8rem;">404</h1>
        <div class="text-muted">Página não encontrada.</div>
        <a href="<?php echo home_url(); ?>">Voltar à Home</a>

        <div class="mt-5">
            <?php get_search_form(); ?>
        </div>
    </div>

</div>
<?php
get_footer();
