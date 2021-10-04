<section class="">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article class="">
                <div class="">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title('<h2 class="">', '</h2>'); ?>
                    </a>
                    <?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
                </div>
            </article>

    <?php endwhile;

        the_posts_pagination();

    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
</section>