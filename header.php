<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="grid-supercontainer">
 
    <header class="header grid-item__4-12 body--14">
        <div class="header__logo-containter">
            <a href="<?php echo home_url(); ?>"><img class="header__logo" src="#" alt="logo do Veros"></a>
        </div>
        <div class="header__open-menu-button">
            <button class="button"><img src="#" alt="burger menu"> </button>
        </div>

        <nav class="header__menu-container">
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => 'header__menu',
                        'walker' => new submenu_wrap()
                    )
                ); 
            ?>
        </nav>

    </header>