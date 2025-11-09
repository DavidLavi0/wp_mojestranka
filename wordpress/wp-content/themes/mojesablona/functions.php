<?php
// === AUTO MOTION GARAGE THEME FUNCTIONS ===

// Základní nastavení
function automotion_setup() {
    // Podpora pro <title> tag
    add_theme_support('title-tag');

    // Podpora pro obrázky (thumbnail)
    add_theme_support('post-thumbnails');

    // Podpora pro vlastní logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Registrace hlavního menu
    register_nav_menus(array(
        'hlavni_menu' => __('Hlavní menu', 'automotion'),
    ));
}
add_action('after_setup_theme', 'automotion_setup');


// === Načtení stylů a skriptů ===
function automotion_scripts() {
    // Načtení stylů
    wp_enqueue_style('automotion-header', get_template_directory_uri() . '/style/header.css', array(), '1.0');
    wp_enqueue_style('automotion-main', get_template_directory_uri() . '/style/main.css', array('automotion-header'), '1.0');
    wp_enqueue_style('automotion-footer', get_template_directory_uri() . '/style/footer.css', array('automotion-main'), '1.0');

    // Načtení JS
    wp_enqueue_script('automotion-script', get_template_directory_uri() . '/script/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'automotion_scripts');

