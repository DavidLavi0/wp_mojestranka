<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <!-- Logo -->
        <a href="#hero" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/garagelogo.png" alt="AutoMotion Garage Logo">
        </a>

        <!-- Hamburger -->
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigace -->
        <nav id="nav-menu">
            <a href="#hero">Domů</a>
            <a href="#o-nas">O nás</a>
            <a href="#sluzby">Služby</a>
            <a href="#info">Kde nás najdete</a>
            <a href="#galerie">Galerie</a>

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'hlavni_menu',
                    'container' => false,
                    'fallback_cb' => false
                ));
            ?>
        </nav>
    </div>
</header>
