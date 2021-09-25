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

    <header class="h-32 bg-gray-400">
        <nav class="flex flex-wrap content-center">
            <?php get_template_part('./template-parts/header-identity'); ?>
            <?php get_template_part('./template-parts/header-menu'); ?>
        </nav>
    </header>