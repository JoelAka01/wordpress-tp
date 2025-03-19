<?php
add_action('after_setup_theme', 'theme_setup');

function add_theme_css_and_js() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_css_and_js');

add_action('after_setup_theme', 'theme_register_menus');
function theme_register_menus() {
    register_nav_menus([
        'primary' => __('Navigation principale', 'esgi-theme')
    ]);
}

function theme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_setup');


function getIcon($icon) {
    $icons = [
        'facebook' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 12.073C22 6.51 17.522 2 12 2S2 6.51 2 12.073c0 4.99 3.657 9.129 8.437 9.927v-7.025H7.898v-2.902h2.54v-2.217c0-2.513 1.492-3.89 3.777-3.89 1.095 0 2.242.195 2.242.195v2.47h-1.263c-1.243 0-1.631.776-1.631 1.572v1.87h2.773l-.443 2.902h-2.33v7.025C18.343 21.202 22 17.063 22 12.073z" fill="#1877F2"/></svg>',
        'twitter' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.46 6.011c-.793.35-1.644.586-2.535.69a4.516 4.516 0 0 0 1.981-2.49 9.054 9.054 0 0 1-2.861 1.091 4.505 4.505 0 0 0-7.696 4.107A12.793 12.793 0 0 1 3.11 4.513a4.505 4.505 0 0 0 1.394 6.014 4.476 4.476 0 0 1-2.04-.564v.057a4.506 4.506 0 0 0 3.611 4.419 4.52 4.52 0 0 1-2.034.077 4.505 4.505 0 0 0 4.207 3.129 9.043 9.043 0 0 1-5.61 1.932c-.364 0-.724-.021-1.08-.063a12.79 12.79 0 0 0 6.916 2.027c8.298 0 12.846-6.874 12.846-12.846 0-.196-.005-.391-.014-.585a9.21 9.21 0 0 0 2.26-2.344z" fill="#1DA1F2"/></svg>'
    ];

    return $icons[$icon] ?? '';
}
