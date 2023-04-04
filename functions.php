<?php

// Load CSS and JavaScript
function your_theme_scripts() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'));

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'your_theme_scripts');

// Register Navigation Menus
register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
));

// Add WooCommerce support
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support() {
    add_theme_support('woocommerce');
}