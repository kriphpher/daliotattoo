<?php 
function dal_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-icon');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dal_support');

function dal_menus(){
    $locations=array('primary'=>"Header Menu", 'secondary'=>"Footer Menu");
    register_nav_menus($locations);
}
add_action('init', 'dal_menus');

function dal_styles(){
    $version=wp_get_theme()->get('Version');
    wp_enqueue_style('dal-custom', "/wp-content/themes/daliotattoo/assets/css/custom.css", array('dal-bootstrap'), $version, 'all');
    wp_enqueue_style('dal-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), '5.3.0', 'all');
    wp_enqueue_style('dal-owl', "/wp-content/themes/daliotattoo/assets/vendor/Owl/css/owl-carousel.css", array(), '2.3.4', 'all');
    wp_enqueue_style('dal-owl-theme', "/wp-content/themes/daliotattoo/assets/vendor/Owl/css/owl-carousel-theme.css", array(), '2.3.4', 'all');
    wp_enqueue_style('dal-lightbox', "/wp-content/themes/daliotattoo/assets/vendor/lightbox/css/main.css", array(), $version, 'all', true);
    wp_enqueue_style('dal-style', "style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'dal_styles');

function dal_scripts(){
    $version=wp_get_theme()->get('version');
    wp_enqueue_script('dal-scripts', "/wp-content/themes/daliotattoo/assets/js/scripts.js", array(), $version, 'all', true);
    wp_enqueue_script('dal-jquery', "https://code.jquery.com/jquery-3.7.0.js", array(), '3.7.0', 'all', true);
    wp_enqueue_script('dal-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array(), '5.3.0', 'all', true);
    wp_enqueue_script('dal-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js", array(), '2.11.8', 'all', true);
    wp_enqueue_script('dal-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js", array(), '5.3.0', 'all', true);
    wp_enqueue_script('dal-owl', "/wp-content/themes/daliotattoo/assets/vendor/Owl/js/owl-carousel.js", array(), '2.3.4', 'all', true);
    wp_enqueue_script('dal-lightbox', "/wp-content/themes/daliotattoo/assets/vendor/lightbox/js/lightbox.js", array(), $version, 'all', true);
    wp_enqueue_script('dal-lightbox', "/wp-content/themes/daliotattoo/assets/vendor/lightbox/js/main.js", array(), $version, 'all', true);
}
add_action('wp_enqueue_scripts', 'dal_scripts');
?>