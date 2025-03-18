<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Menu Principal', 'theme-textdomain')
    ]);
}

function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
