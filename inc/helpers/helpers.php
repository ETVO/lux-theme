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

if (!function_exists('getContrastColor')) {
    function getContrastColor($hexColor)
    {
        // hexColor RGB
        $R1 = hexdec(substr($hexColor, 1, 2));
        $G1 = hexdec(substr($hexColor, 3, 2));
        $B1 = hexdec(substr($hexColor, 5, 2));

        // Black RGB
        $blackColor = "#000000";
        $R2BlackColor = hexdec(substr($blackColor, 1, 2));
        $G2BlackColor = hexdec(substr($blackColor, 3, 2));
        $B2BlackColor = hexdec(substr($blackColor, 5, 2));

        // Calc contrast ratio
        $L1 = 0.2126 * pow($R1 / 255, 2.2) +
            0.7152 * pow($G1 / 255, 2.2) +
            0.0722 * pow($B1 / 255, 2.2);

        $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
            0.7152 * pow($G2BlackColor / 255, 2.2) +
            0.0722 * pow($B2BlackColor / 255, 2.2);

        $contrastRatio = 0;
        if ($L1 > $L2) {
            $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
        } else {
            $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
        }

        // If contrast is more than 5, return black color
        if ($contrastRatio > 5) {
            return '#000000';
        } else {
            // if not, return white color.
            return '#FFFFFF';
        }
    }
}
