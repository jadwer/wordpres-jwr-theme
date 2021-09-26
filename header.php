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

    <header class="container mx-auto my-0 flex justify-between items-center  bg-gray-100">
        <nav class="flex items-center">
            <?php get_template_part('./template-parts/header-identity'); ?>
            <?php get_template_part('./template-parts/header-menu'); ?>
        </nav>
        <div class="flex items-center bg-blue-900 px-3 py-2 mx-auto text-white hover:bg-blue-300">
            <?php wp_loginout('index.php'); ?>
        </div>
    </header>
    <div class="container">
