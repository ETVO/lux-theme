<?php

/**
 * Partial for blog archive feed
 * 
 * @package WordPress
 */
$show_featured = $args['show_featured'];

?>

<div class="blog-feed">
    <div class="post-feed row m-0 w-100 row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 justify-content-center">
        <?php
        if (have_posts()) {
            $i = 0;
            while (have_posts()) :
                the_post();
                $post = get_post();

                $permalink = esc_url(get_the_permalink());

                $title = get_the_title();
                $excerpt = get_the_excerpt();

                $author_name = get_the_author_meta('display_name', $post->post_author);
                $author_avatar = get_avatar($post->post_author, 48);

                $image_url = get_the_post_thumbnail_url($post->ID, 'medium');
                $image_alt = get_the_post_thumbnail_caption();

                $categories = get_the_category();
                $category = $categories[0];
                $category_color = get_field('cor', $category);

                $date = get_the_date('d M');
                $reading_time = get_reading_time($post->ID);

                if ($i == 0 && is_sticky($post->ID) && $show_featured) :
                    $image_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $image_alt = get_the_post_thumbnail_caption();
        ?>
                    <small class="m-auto text-center">Artigo em destaque</small>
                    <div class="col-12 d-none d-sm-block">
                        <div class="post featured card h-100">
                            <a class="card-img-top" href="<?php echo $permalink; ?>">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                <div class="overlay" style="background: linear-gradient(<?php echo $category_color; ?>, #66666680);"></div>
                            </a>
                            <div class="card-body">
                                <div class="body-head-wrap d-none d-sm-flex">
                                    <div class="author-image">
                                        <?php if ($author_avatar) :
                                            echo $author_avatar;
                                        else : ?>
                                            <span class="bi-person-fill"></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tag-wrap">
                                        <a class="tag" href="<?php echo "?category={$category->slug}"; ?>">
                                            <?php echo $category->name; ?>
                                        </a>
                                    </div>
                                </div>

                                <a href="<?php echo $permalink; ?>">
                                    <h4 class="card-title fs-3"><?php echo $title; ?></h4>
                                </a>
                                <p class="card-text">
                                    <?php echo $excerpt; ?>
                                </p>

                                <div class="meta d-flex">
                                    <span class="author-name"><?php echo $author_name; ?></span>
                                    <span class="sep mx-2">|</span>
                                    <span class="me-auto date"><?php echo $date; ?></span>
                                    <span class="ms-auto reading-time">
                                        <span class="bi-clock me-1"></span><?php echo $reading_time; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col d-block d-sm-none">
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

                    <small class="col-12 m-auto pt-3 text-center" id="todos">Todos os artigos</small>
                <?php
                else :
                ?>

                    <div class="col">
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

        <?php
                endif;
                $i++;
            endwhile;
        }
        ?>
    </div>
</div>