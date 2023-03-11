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

function veros_register_styles(){
    
    wp_enqueue_style('veros-normalize', get_template_directory_uri() . './styles/css/normalize.css', array(), '1.0');
    wp_enqueue_style('veros-home', get_template_directory_uri() . './styles/css/home.css', array(), '1.0');

}

add_action('wp_enqueue_scripts', 'veros_register_styles');

?>