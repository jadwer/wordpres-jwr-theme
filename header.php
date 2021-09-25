<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="flex justify-center items-center bg-gray-400">
            <?php //the_custom_logo();?>
        <a href="<?= esc_url(home_url('/')) ?>">
            <?php bloginfo('name'); ?>
            <?php bloginfo('description'); ?>
        </a>

        <nav class="flex">
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu'                 => 'header',
                'menu_class'           => 'flex',
                'container'            => '',
                'echo'                 => true,
                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'li_class'             => 'mr-6',
                'a_class'              => 'text-blue-500 hover:text-blue-800'

                )); ?>
        </nav>

    </header>

    <?php get_sidebar(); ?>
    <main>