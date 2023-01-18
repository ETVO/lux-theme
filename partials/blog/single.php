<?php

/**
 * Partial for single post content rendering
 * 
 * @package WordPress
 */

// Get the blog information 
$blog_url = get_post_type_archive_link('post');

// Get the post information
$post = get_post();

$permalink = esc_url(get_the_permalink());


$has_image = has_post_thumbnail();
if ($has_image)
    $image = get_image_props_id(get_post_thumbnail_id($post->ID));

$title = get_the_title();
$excerpt = get_the_excerpt();

$date = get_the_date();
$categories = get_the_category();

$author_name = get_the_author_meta('display_name', $post->post_author);
$author_avatar = get_avatar($post->post_author, 48);
$reading_time = get_reading_time($post->ID);

?>

<div class="blog-single">
    <div class="container default-lux">
        <div class="heading">
            <div class="action">
                <a href="<?php echo $blog_url; ?>" class="d-flex">
                    <span class="bi bi-arrow-left">
                        Voltar ao Blog
                    </span>
                </a>
            </div>
            <div class="author-image">
                <?php if ($author_avatar) :
                    echo $author_avatar;
                else : ?>
                    <span class="bi-person-fill"></span>
                <?php endif; ?>
            </div>
            <div class="title">
                <h1><?php echo $title; ?></h1>
            </div>
            <div class="meta">
                <?php echo $author_name; ?> <span class="sep">|</span>
                <?php echo $date; ?> <span class="sep">|</span>
                <span class="bi-clock me-1"></span><?php echo "$reading_time"; ?>
            </div>

            <div class="categories">
                <?php foreach ($categories as $category) : ?>
                    <a class="tag" href="<?php echo $blog_url . "?category={$category->slug}"; ?>">
                        <?php echo $category->name; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="excerpt">
            <p>
                <?php echo $excerpt; ?>
            </p>
        </div>
        <?php if ($has_image) : ?>
            <div class="image">
                <img class="img-fluid m-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        <?php endif; ?>
        <div class="content">
            <?php the_content(); ?>
        </div>

    </div>

    <div class="after-content margin-footer">

        <div class="container default-lux">

            <div class="title">
                <h2 class="fs-3">Posts relacionados</h2>
            </div>
            <?php

            $related = get_posts(array(
                'numberposts' => 3,
                'post__not_in' => array($post->ID)
            ));

            if ($related) :

            ?>
                <div class="post-feed row m-0 w-100 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start">
                    <?php
                    foreach ($related as $post) :
                        setup_postdata($post);
                        $post = get_post();

                        $permalink = esc_url(get_the_permalink());

                        $title = get_the_title();
                        $excerpt = get_the_excerpt();

                        $author_name = get_the_author_meta('display_name', $post->post_author);
                        $author_avatar = get_avatar($post->post_author, 48);

                        $image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
                        $image_alt = get_the_post_thumbnail_caption();

                        $categories = get_the_category();
                        $category = $categories[0];
                        $category_color = get_field('cor', $category);

                        $date = get_the_date('d M');
                        $reading_time = get_reading_time($post->ID);

                    ?>

                        <div class="col">
                            <div class="post card h-100">
                                <a class="card-img-top" href="<?php echo $permalink; ?>">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                    <div class="overlay" style="background: linear-gradient(<?php echo $category_color; ?>, #66666680);"></div>
                                </a>
                                <a class="tag" href="<?php echo $blog_url . "?category={$category->slug}"; ?>">
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

                    <?php

                    endforeach;

                    ?>
                </div>
            <?php

            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>