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
    wp_enqueue_style('veros-normalize', get_template_directory_uri() . '/assets/styles/css/normalize.css', array(), $version);
    
    if (is_front_page() || is_page_template('internacao-uti.php') || is_page_template('cirurgias.php') || is_page_template('ps-ambulancia.php') || is_page_template('consultas.php')){
        wp_enqueue_style('veros-glide-core-style', get_template_directory_uri() . '/assets/styles/css/glide/glide.core.css', array('veros-normalize'), $version);
        wp_enqueue_style('veros-glide-theme-style', get_template_directory_uri() . '/assets/styles/css/glide/glide.theme.css', array('veros-normalize'), $version);
    }

    if (is_front_page()){
        wp_enqueue_style('veros-home', get_template_directory_uri() . '/assets/styles/css/home.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);
    }
    if (is_page_template('somos-veros.php')){
        wp_enqueue_style('veros-home', get_template_directory_uri() . '/assets/styles/css/somos-veros.css', array('veros-normalize'), $version);   
    }
    if (is_page_template('servicos.php')){
        wp_enqueue_style('veros-servicos', get_template_directory_uri() . '/assets/styles/css/servicos.css', array('veros-normalize'), $version);    
    }
    if (is_page_template('especialidades.php')){
        wp_enqueue_style('veros-especialidades', get_template_directory_uri() . '/assets/styles/css/especialidades.css', array('veros-normalize'), $version);    
    }
    if (is_page_template('internacao-uti.php')){
        wp_enqueue_style('veros-internacao-uti', get_template_directory_uri() . '/assets/styles/css/internacao-uti.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);    
    }
    if (is_page_template('cirurgias.php')){
        wp_enqueue_style('veros-cirurgias', get_template_directory_uri() . '/assets/styles/css/cirurgias.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);    
    }
    if (is_page_template('ps-ambulancia.php')){
        wp_enqueue_style('veros-ps-ambulancia', get_template_directory_uri() . '/assets/styles/css/ps-ambulancia.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);    
    }
    if (is_page_template('consultas.php')){
        wp_enqueue_style('veros-consultas', get_template_directory_uri() . '/assets/styles/css/consultas.css', array('veros-normalize', 'veros-glide-core-style', 'veros-glide-theme-style'), $version);    
    }

}

add_action('wp_enqueue_scripts', 'veros_register_styles');

function veros_register_scripts(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('veros-header', get_template_directory_uri() . '/scripts/header.js', array(), $version, true);
    // wp_enqueue_script('veros-rd-station-newsletter', 'https://d335luupugsy2.cloudfront.net/js/loader-scripts/d19a3880-2941-468f-ade5-fff01b355b4e-loader.js', array());
    
    if (is_front_page() || is_page_template('internacao-uti.php') || is_page_template('cirurgias.php') || is_page_template('ps-ambulancia.php') || is_page_template('consultas.php')){
        wp_enqueue_script('veros-glide-cdn', get_template_directory_uri() . '/scripts/glide/glide.js', array(), '3.6.0', true);
    }
    
    if (is_front_page()){
        wp_enqueue_script('veros-pet-types', get_template_directory_uri() . '/scripts/pet-types.js', array(), $version, true);
        wp_enqueue_script('veros-tabnav', get_template_directory_uri() . '/scripts/tabnav.js', array(), $version, true);
        wp_enqueue_script('veros-home-glide', get_template_directory_uri() . '/scripts/home__glide.js', array('veros-glide-cdn'), $version, true);
    }
    if (is_page_template('especialidades.php')){
        wp_enqueue_script('veros-tabnav-cards', get_template_directory_uri() . '/scripts/tabnav-cards.js', array(), $version, true);
    }
    if (is_page_template('internacao-uti.php')){
        wp_enqueue_script('veros-internacao-uti-glide', get_template_directory_uri() . '/scripts/internacao-uti__glide.js', array('veros-glide-cdn'), $version, true);
    }
    if (is_page_template('cirurgias.php')){
        wp_enqueue_script('veros-cirurgias-glide', get_template_directory_uri() . '/scripts/cirurgias__glide.js', array('veros-glide-cdn'), $version, true);
    }
    if (is_page_template('ps-ambulancia.php')){
        wp_enqueue_script('veros-ps-ambulancia-glide', get_template_directory_uri() . '/scripts/ps-ambulancia__glide.js', array('veros-glide-cdn'), $version, true);
    }
    if (is_page_template('consultas.php')){
        wp_enqueue_script('veros-consultas-glide', get_template_directory_uri() . '/scripts/consultas__glide.js', array('veros-glide-cdn'), $version, true);
    }
    
}

add_action('wp_enqueue_scripts', 'veros_register_scripts');

?>