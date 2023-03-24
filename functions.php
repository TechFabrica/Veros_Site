<?php 

function veros_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_theme_setup', 'veros_theme_support');

function veros_menus(){

    $locations = array(
        'primary' => 'Desktop header menu',
        'footer' => 'Footer menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'veros_menus');

class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"header__submenu\">\n";
    }
}

class footer_submenu_wrap extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"footer__submenu\">\n";
    }
}

function veros_register_styles(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('veros-normalize', get_template_directory_uri() . './assets/styles/css/normalize.css', array(), $version);
    wp_enqueue_style('veros-home', get_template_directory_uri() . './assets/styles/css/home.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);
    wp_enqueue_style('veros-glide-core-style', get_template_directory_uri() . './assets/styles/css/glide/glide.core.css', array('veros-normalize'), $version);
    wp_enqueue_style('veros-glide-theme-style', get_template_directory_uri() . './assets/styles/css/glide/glide.theme.css', array('veros-normalize'), $version);

}

add_action('wp_enqueue_scripts', 'veros_register_styles');

function veros_register_scripts(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('veros-glide-cdn', get_template_directory_uri() . './scripts/glide/glide.js', array(), '3.6.0', true);
    wp_enqueue_script('veros-header', get_template_directory_uri() . './scripts/header.js', array(), $version, true);
    wp_enqueue_script('veros-pet-types', get_template_directory_uri() . './scripts/pet-types.js', array(), $version, true);
    wp_enqueue_script('veros-tabnav', get_template_directory_uri() . './scripts/tabnav.js', array(), $version, true);
    wp_enqueue_script('veros-glide', get_template_directory_uri() . './scripts/home__glide.js', array('veros-glide-cdn'), $version, true);

}

add_action('wp_enqueue_scripts', 'veros_register_scripts');

?>