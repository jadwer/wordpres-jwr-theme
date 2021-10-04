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

    <header class="w-screen flex flex-grow mb-5 shadow-lg bg-gray-200 fixed lg:h-16">
        <nav class="flex w-5/6 justify-end">
            <?php get_template_part('./template-parts/header-identity'); ?>
            <?php get_template_part('./template-parts/header-menu'); ?>
        </nav>
        <div class="flex flex-col w-1/6 justify-around items-center lg:flex-row">
            <div class="relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                    <span class="block relative w-6 h-px rounded-sm bg-black"></span>
                    <span class="block relative w-6 h-px rounded-sm bg-black mt-1"></span>
                    <span class="block relative w-6 h-px rounded-sm bg-black mt-1"></span>
                </button>
            </div>
            <?php wp_loginout('index.php'); ?>
        </div>
    </header>
    <div class="flex pt-28">