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


function my_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'principal',
            'name'          => __('Sidebar principal'),
            'description'   => __('Un sidebar pensado para agregar un menu especifico.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'my_register_sidebars');


// menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu principal '),
            'extra-menu' => __('Menu lateral'),
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

    // Custom logo.
    $logo_width  = 120;
    $logo_height = 90;

    // If the retina setting is active, double the recommended width and height.
    if (get_theme_mod('retina_logo', false)) {
        $logo_width  = floor($logo_width * 2);
        $logo_height = floor($logo_height * 2);
    }

    add_theme_support(
        'custom-logo',
        array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );
}

add_action('after_setup_theme', 'jwr_setup');
