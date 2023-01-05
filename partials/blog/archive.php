<?php

/**
 * Partial for blog archive
 * 
 * @package WordPress
 */

$title = 'Blog';
$text = 'Direto ao <strong>conteúdo</strong>.';
$color = 'green';

?>

<div class="blog-archive">
    <div class="lux-heading">
        <div class="container default-lux">
            <div class="wrap d-flex flex-column-reverse flex-md-row">
                <div class="content flex-fill">
                    <h1 class="title">
                        <?php echo $title; ?>
                    </h1>
                    <p class="text">
                        <?php echo $text; ?>
                    </p>
                </div>
                <div class="spheres <?php echo $color; ?>"></div>
            </div>
        </div>
    </div>

    <div class="container default-lux">
        <div class="filters row row-cols-1 row-cols-sm-2">
            <div class="col categories-wrap mb-2 mb-sm-0">
                <?php get_template_part("partials/blog/categories"); ?>
            </div>
            <div class="col search">
                <div class="form-wrap">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="feed-wrap margin-footer">
        <div class="container default-lux">
            <?php get_template_part("partials/blog/feed", null, array('show_featured' => true)); ?>

            <?php get_template_part("partials/pagination"); ?>
        </div>
    </div>
</div>