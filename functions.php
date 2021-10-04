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

/*
function menu_li_class($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'menu_li_class', 1, 3);
*/

/*
function menu_a_class( $atts, $item, $args, $depth ) {
    if(empty($atts['class'])) {
        $atts['class'] = '';
    }

    $classes = explode(' ', $atts['class']);

    $patterns = apply_filters( 'nav_menu_css_class_unescape_patterns', '/___/');
    $replacements = apply_filters( 'nav_menu_css_class_unescape_replacements', ':' );
    $classes = array_map(function($cssclass) use( $patterns, $replacements) {
        return preg_replace($patterns, $replacements, $cssclass);
    }, $classes);

    if (property_exists($args, 'a_class')) {
        $arr_classes = explode(' ', $args->a_class);
        $classes = array_merge($classes, $arr_classes);
    }
    if (property_exists($args, "a_class_$depth")) {
        $arr_classes = explode(' ', $args->{"a_class_$depth"});
        $classes = array_merge($classes, $arr_classes);
    }

    $atts['class'] = implode(' ', $classes);

    return $atts;
};
add_filter( 'nav_menu_link_attributes', 'menu_a_class', 1, 4 );
*/


/*
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'h-20 w-auto', $html );
    $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

    return $html;
}
add_filter('get_custom_logo','change_logo_class');
*/