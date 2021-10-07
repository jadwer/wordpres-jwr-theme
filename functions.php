<?php

function add_jwt_theme_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('page-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'add_jwt_theme_styles');

function add_jwr_theme_scripts()
{
    wp_enqueue_script('page-scripts', get_template_directory_uri() . '/assets/js/scripts.js');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'add_jwr_theme_scripts');

// menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu principal '),
            'footer-menu' => __('Menu del footer'),
            'social-menu' => __('Menu de redes sociales')
        )
    );
}
add_action('init', 'register_my_menus');

function jwr_setup()
{
    // add images 
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }

    add_theme_support('custom-logo', array('header-text' => array( 'site-title', 'site-description' )));
}
add_action('after_setup_theme', 'jwr_setup');

// wp_register_style( 'Tailwindcss', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' );
// wp_enqueue_style('Tailwindcss');