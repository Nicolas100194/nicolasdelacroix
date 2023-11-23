<?php

function theme_NicolasDelacroix_register_assets(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_style('themenicolasdelacroix', get_stylesheet_directory_uri().'/assets/sass/main.css');

}

function theme_NicolasDelacroix_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
}


function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}

add_action('after_setup_theme','theme_NicolasDelacroix_supports');
add_action('wp_enqueue_scripts', 'theme_NicolasDelacroix_register_assets');
add_filter('upload_mimes', 'wpc_mime_types');

register_nav_menu('header', 'menu principal');
