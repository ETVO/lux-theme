<?php

/**
 * 404 error page template
 * 
 * @package WordPress
 */

get_header();

?>
<div class="inner-404 flex-fill d-flex">

    <div class="m-auto text-center">
        <h1 style="font-weight: 700; font-size: 8rem;">404</h1>
        <h2 class="fs-4">Página não encontrada.</h2>
        <a href="<?php echo home_url(); ?>">Voltar à Home</a>

        <div class="mt-5">
            <?php get_search_form(); ?>
        </div>
    </div>

</div>
<?php
get_footer();
