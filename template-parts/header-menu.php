<div class="flex justify-end items-center w-5/6">
    <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu'                 => 'header',
        'menu_class'           => 'flex space-x-12 flex-col lg:flex-row',
        'container'            => '',
        'echo'                 => true,
        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    )); ?>
</div>