<?php

function cta_blog($attrs)
{
    $attrs = shortcode_atts([], $attrs);

    $title = get_theme_mod('cta_blog_title');
    $text = get_theme_mod('cta_blog_text');

    $post_type = 'post';
    $orderby = 'date';
    $order = 'DESC';

    $archive_link = get_permalink(get_option('page_for_posts'));

    // Posts Per Page (-1 means it shows all)
    $ppp = 2;

    // WP_Query arguments
    $args = array(
        'post_type'              => $post_type,
        'post_status'            => array('publish'),
        'has_password'           => false,
        'posts_per_page'         => $ppp,
        'no_found_posts'         => true,

        // Order ASC first by 'menu_order', only after by 'title' or 'date'
        'orderby'                => array('menu_order' => 'ASC', $orderby => $order),
    );

    // The Query
    $query = new WP_Query($args);

    ob_start(); // Start HTML buffering

?>
    <div class="cta_blog">
        <div class="container default-lux header">
            <img src="<?php echo THEME_IMG_URI . '/money.svg'; ?>" alt="" class="icon">
            <div class="title">
                <h2>
                    <?php echo $title; ?>
                </h2>
            </div>
            <div class="text">
                <?php echo $text; ?>
            </div>
        </div>
        <?php
        if ($query->have_posts()) : ?>
            <div class="post-feed container default-lux">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php
                    while ($query->have_posts()) :
                        $query->the_post();
                        $post = get_post();

                        $permalink = esc_url(get_the_permalink());

                        $title = get_the_title();
                        $excerpt = get_the_excerpt();

                        $author_name = get_the_author_meta('display_name');
                        $author_avatar = get_avatar(get_the_author_meta('ID'), 48);

                        $image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
                        $image_alt = get_the_post_thumbnail_caption();

                        $categories = get_the_category();
                        $category = $categories[0];
                        $category_color = get_field('cor', $category);

                        $date = get_the_date('d M');
                        $reading_time = get_reading_time($post->ID);

                    ?>

                        <div class="col mx-auto">
                            <div class="post card h-100">
                                <a class="card-img-top" href="<?php echo $permalink; ?>">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                    <div class="overlay" style="background: linear-gradient(<?php echo $category_color; ?>, #66666680);"></div>
                                </a>
                                <a class="tag" href="<?php echo "?category={$category->slug}"; ?>">
                                    <?php echo $category->name; ?>
                                </a>
                                <div class="card-body">
                                    <div class="author-image">
                                        <?php if ($author_avatar) :
                                            echo $author_avatar;
                                        else : ?>
                                            <span class="bi-person-fill"></span>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo $permalink; ?>">
                                        <h4 class="card-title fs-5"><?php echo $title; ?></h4>
                                    </a>
                                    <div class="meta">
                                        <?php echo $author_name; ?> <span class="sep">|</span>
                                        <?php echo $date; ?> <span class="sep">|</span>
                                        <span class="bi-clock"></span><?php echo "$reading_time"; ?>
                                    </div>
                                    <p class="card-text">
                                        <?php echo $excerpt; ?>
                                    </p>

                                </div>
                                <div class="card-footer d-flex flex-column flex-sm-row">
                                    <!-- <small class="m-auto ms-0 author-name"><?php echo $author_name; ?></small> -->

                                    <!-- <a href="<?php echo $permalink; ?>" class="btn-cta m-auto me-0">continue lendo</a> -->
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        <?php else : ?>
            <div class="container default-lux no-posts">
                <?php _e('Nenhum post encontrado'); ?>
            </div>
        <?php endif; ?>
        <div class="container default-lux action-container">
            <div class="action">
                <a href="<?php echo $archive_link; ?>" class="btn-cta format-strong">
                    conheça o <strong>nosso blog</strong>
                </a>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
