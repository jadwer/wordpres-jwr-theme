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

    <header>
        <a href="<?= esc_url(home_url('/')) ?>">
            <?php the_custom_logo();
            bloginfo('name'); ?>
            <?php bloginfo('description'); ?>
        </a>

        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>

    </header>

    <?php get_sidebar(); ?>
    <main>