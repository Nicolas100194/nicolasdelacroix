<?php

function theme_NicolasDelacroix_register_assets(){
    wp_deregister_script('jquery');
    wp_enqueue_style('themenicolasdelacroix', get_stylesheet_directory_uri().'/assets/sass/main.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('swiper', get_stylesheet_directory_uri().'/assets/js/swiper-home.js', array(), null, true);
    wp_enqueue_script('swiperjs-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    wp_enqueue_script('questions-reply.js', get_stylesheet_directory_uri().'/assets/js/questions-reply.js', array(), null, true);


}

function theme_NicolasDelacroix_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
}


function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}

function disable_gutenberg_editor(){
    return false;
}

add_action('after_setup_theme','theme_NicolasDelacroix_supports');
add_action('wp_enqueue_scripts', 'theme_NicolasDelacroix_register_assets');
add_filter('upload_mimes', 'wpc_mime_types');
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");


register_nav_menu('header', 'menu principal');
