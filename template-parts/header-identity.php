<div class="flex flex-col items-center text-center w-1/6 " id="identity">
    <?php the_custom_logo(); ?>
    <a href="<?= esc_url(home_url('/')) ?>">
        <?php bloginfo('name'); ?>
        <br/>
    <?php bloginfo('description'); ?>
    </a>
</div>