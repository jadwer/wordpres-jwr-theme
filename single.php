<?php get_header(); ?>
<div class="inline-flex py-0">
<?php get_sidebar(); ?>

    <main>
        <section class = "p-10">
            <?php get_template_part('./template-parts/single-post')?>
        </section>
    </main>

</div>
<?php get_footer(); ?>