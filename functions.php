<?php

function theme_NicolasDelacroix_post_type(){
    $labels = array(
        'name' => 'Projets',
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Projets'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields', 'page-attributes', 'thumbnails'),
        'menu_position' => 5,
    );

    register_post_type('projets', $args);
}

function display_cpt_title(){
    echo the_title();
}

function display_cpt_technologies(){
    if(get_field('technologies')){
        $technologies = get_field('technologies');
        echo '<ul>';
        foreach($technologies as $technology){
            echo '<li>' . $technology . '</li>';
        }
        echo '</ul>';
    }
}

function display_cpt_context(){
    if(get_field('contexte')){
        $contexte = get_field('contexte');
        echo "<p>" . $contexte . '</p>';
    }
}

function display_cpt_link(){
    if(get_field('lien_vers_site')){
        $link = get_field('lien_vers_site');
        echo "<a class=\"btn-link-project\" href=\"$link\">Consulter le site internet</a>";
    }
}

function display_cpt_thumbnails(){
    if (has_post_thumbnail()){
        $image = get_the_post_thumbnail();
        if($image){
            echo $image;
        }
    }
}




function theme_NicolasDelacroix_register_assets(){
    wp_deregister_script('jquery');
    wp_enqueue_style('themenicolasdelacroix', get_stylesheet_directory_uri().'/assets/sass/main.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('swiper', get_stylesheet_directory_uri().'/assets/js/swiper-home.js', array(), null, true);
    wp_enqueue_script('swiper-ecommerce', get_stylesheet_directory_uri().'/assets/js/swiper-ecommerce.js', array(), null, true);
    wp_enqueue_script('swiperjs-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    wp_enqueue_script('questions-reply.js', get_stylesheet_directory_uri().'/assets/js/questions-reply.js', array(), null, true);
    wp_enqueue_script('sub-menu.js', get_stylesheet_directory_uri().'/assets/js/sub-menu.js', array(), null, true);
}

function theme_NicolasDelacroix_supports(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}


function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}

function disable_gutenberg_editor(){
    return false;
}



add_action('init', 'theme_NicolasDelacroix_post_type');
add_action('after_setup_theme','theme_NicolasDelacroix_supports');
add_action('display_cpt_title', 'display_cpt_title');
add_action('display_cpt_thumbnails', 'display_cpt_thumbnails');
add_action('display_cpt_context', 'display_cpt_context');
add_action('display_cpt_technologies', 'display_cpt_technologies');
add_action('display_cpt_link', 'display_cpt_link');
add_action('wp_enqueue_scripts', 'theme_NicolasDelacroix_register_assets');
add_filter('upload_mimes', 'wpc_mime_types');
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");



register_nav_menu('header', 'menu principal');
