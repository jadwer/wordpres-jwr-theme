<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content">
    <h1>Aqui el page default</h1>

    <div class="the-loop">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h2>', '</h2>');
                the_post_thumbnail();
                the_excerpt();
                the_content();
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>
    </div>

</div>
<?php get_footer(); ?>