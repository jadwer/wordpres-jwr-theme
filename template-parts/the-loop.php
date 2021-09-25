<section class="flex flex-row">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article class="px-4 w-1/3">
                <a href="<?php the_permalink() ?>"><?php the_title('<h2>', '</h2>'); ?></a>
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>
            </article>

    <?php endwhile;

        the_posts_pagination();

    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
</section>