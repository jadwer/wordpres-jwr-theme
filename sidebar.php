<aside class="bg-gray-400 w-1/5 p-3">
    <?php if (is_active_sidebar('lateral')) : ?>
        <?php dynamic_sidebar('lateral'); ?>
    <?php else : ?>
        <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu'                 => 'header',
        'menu_class'           => 'block',
        'container'            => '',
        'echo'                 => true,
        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'li_class'             => 'py-3',
        'a_class'              => ' text-gray-700 hover:text-blue-200 hover:rounded'

    )); ?>
    <?php endif; ?>
</aside>