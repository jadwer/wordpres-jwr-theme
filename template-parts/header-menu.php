<div class="flex-1 p-3 content-center">
    <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu'                 => 'header',
        'menu_class'           => 'inline-flex mx-auto',
        'container'            => '',
        'echo'                 => true,
        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'li_class'             => 'mr-6',
        'a_class'              => ' text-gray-700 hover:text-blue-200 hover:rounded'

    )); ?>
</div>