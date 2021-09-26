<?php get_header(); ?>
<div class="inline-flex">
    <?php get_sidebar(); ?>

    <main>
        <section class="w-4/5 p-10">
            <?php get_template_part('./template-parts/page-content') ?>
        </section>
    </main>

</div>
<?php get_footer(); ?>