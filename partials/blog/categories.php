<?php

/**
 * Partial for categories toggler
 * 
 * @package WordPress
 */

$categories = get_categories();

if (isset($_GET['category'])) {
    $set_category_slug = $_GET['category'];
}

$show_reset_btn = true;
$reset_btn_label = 'Limpar seleção';

$blog_url = get_permalink(get_option('page_for_posts'));

?>

<span class="blog-categories mx-auto">
    <?php
    foreach ($categories as $category) :

        $color = get_field('cor', $category);

        // Is this category the active one?
        if ($category->slug == $set_category_slug) {
            $class = "selected";
            $href = $blog_url . "?";
        } else {
            $class = "";
            $href = $blog_url . "?category={$category->slug}";
        }
    ?>
        <a class="category <?php echo $class; ?>" href="<?php echo $href; ?>">
            <span class="color" style="background-color: <?php echo $color ?>;"></span>
            <span class="name"><?php echo $category->name; ?></span>
        </a>
    <?php
    endforeach;

    // Add reset button for the user to clear category selection
    if ($show_reset_btn && count($categories) > 0 && $set_category_slug != "") :
    ?>
        <a class="category-reset" href="?" title="<?php echo $reset_btn_label; ?>" aria-label="<?php echo $reset_btn_label; ?>">
            <span class="icon bi-arrow-counterclockwise"></span>
        </a>
    <?php endif; ?>

</span>