<?php

if (!function_exists('get_image_props')) {
    function get_image_props($images, $i)
    {
        $image = $images[$i];
        $id = $image['id'];
        $url = $image['url'];
        $caption = wp_get_attachment_caption($id);

        return array(
            'id' => $id,
            'url' => $url,
            'caption' => $caption,
        );
    }
}

if (!function_exists('get_image_props_id')) {
    function get_image_props_id($id)
    {
        $caption = wp_get_attachment_caption($id);
        $url = wp_get_attachment_url($id);

        return array(
            'id' => $id,
            'url' => $url,
            'caption' => $caption,
        );
    }
}

if (!function_exists('clean_str')) {
    function clean_str($str)
    {
        $_str = str_replace(' ', '', $str); // Replaces all spaces.

        $_str = preg_replace('/[^A-Za-z0-9\-]/', '', $_str); // Removes special chars.

        return $_str;
    }
}

if (!function_exists('get_reading_time')) {
    function get_reading_time($post_id)
    {
        // gets full text from article
        $article = get_post_field('post_content', $post_id); 
        
        // removes html tags
        $wordcount = str_word_count(strip_tags($article)); 
        
        // takes rounded of words divided by 250 words per minute
        $time = ceil($wordcount / 250); 

        $label = " min";

        return $time . $label;
    }
}
