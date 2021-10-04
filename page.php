<?php get_header(); ?>
    <?php get_sidebar(); ?>

    <main class="flex w-10/12 p-5 bg-white">
        <section class="main-content">
            <?php get_template_part('./template-parts/page-content') ?>
        </section>
    </main>

<?php get_footer(); ?>