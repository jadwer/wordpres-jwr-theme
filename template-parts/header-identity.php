<div class="block p-3  bg-gray-100" id="identity">
    <?php the_custom_logo(); ?>
    <a href="<?= esc_url(home_url('/')) ?>">
        <?php bloginfo('name'); ?>
    </a>
    <!-- ?php bloginfo('description'); ? -->
</div>