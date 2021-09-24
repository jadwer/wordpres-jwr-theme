<?php get_header(); ?>
<div class="content">
    <h1>Aqui el index</h1>

    <main class="the-loop">
        <?php

        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink() ?>"><?php the_title('<h2>', '</h2>'); ?></a>
                    <?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
                </article>

        <?php endwhile;

            the_posts_pagination();

        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>
    </main>

</div>
<?php get_footer(); ?>