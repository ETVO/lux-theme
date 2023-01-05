<?php

/**
 * Search results template
 * 
 * @package WordPress
 */

get_header();

$search_query = get_search_query();
$title = "Resultados para <b>'$search_query'</b>";

// Get posts archive url
$blog_url = get_post_type_archive_link('post');

?>

<div class="blog-search-wrap">
    <div class="heading container default-lux">
        <div class="d-flex pb-3">
            <div class="search-title me-auto text-center text-lg-start">
                <h2>
                    <?php echo $title; ?>
                </h2>
                <div class="action">
                    <a href="<?php echo $blog_url; ?>" class="d-flex">
                        <span class="bi bi-arrow-left">
                            Voltar ao Blog
                        </span>
                    </a>
                </div>
            </div>
            <div class="search ms-auto">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="search-results margin-footer">
        <div class="feed container">
            <?php get_template_part("partials/blog/feed"); ?>
        </div>
    </div>
</div>

<?php

get_footer();
