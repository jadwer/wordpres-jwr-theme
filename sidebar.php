<aside class="flex items-center h-screen w-2/12 p-4 bg-gray-100">
    <?php if (is_active_sidebar('lateral')) : ?>
        <?php dynamic_sidebar('lateral'); ?>
    <?php else : ?>
        <?php wp_nav_menu(array(
            'theme_location' => 'lateral-menu',
            'menu'                 => 'lateral',
            'menu_class'           => 'bg-gray-200',
            'container'      => '',
            'echo'                 => true,
            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        )); ?>
    <?php endif; ?>
</aside>