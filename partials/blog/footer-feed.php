<?php

/**
 * Blog feed for footer
 * 
 * @package WordPress
 */
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

if ($query->have_posts()) : ?>
    <div class="footer-feed">
        <a class="feed-title" href="<?php echo $archive_link; ?>">
            <h4>Conteúdo <span class="bi-arrow-right"></span></h4>
        </a>


        <div class="posts">
            <?php
            while ($query->have_posts()) :
                $query->the_post();
                $post = get_post();

                $permalink = esc_url(get_the_permalink());

                $title = get_the_title();
                $excerpt = get_the_excerpt();

                $image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
                $image_alt = get_the_post_thumbnail_caption();

                $categories = get_the_category();
                $category = $categories[0];
                $category_color = get_field('cor', $category);

            ?>

                <div class="post">
                    <div class="header d-flex justify-content-start align-self-start flex-column flex-sm-row">
                        <a href="<?php echo $permalink; ?>">
                            <div class="image">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                <div class="overlay" style="background: linear-gradient(<?php echo $category_color; ?>, #66666680);"></div>
                            </div>
                        </a>
                        <div class="tag-wrap">
                            <a class="tag" href="<?php echo $archive_link . "?category={$category->slug}"; ?>">
                                <?php echo $category->name; ?>
                            </a>        
                        </div>
                    </div>
                    <a href="<?php echo $permalink; ?>">
                        <h5 class="title"><?php echo $title; ?></h5>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <div class="no-posts">
            <?php _e('Nenhum post encontrado'); ?>
        </div>
    <?php endif; ?>
    </div>