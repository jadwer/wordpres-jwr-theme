        </main>
    <footer>
        Footer
        &copy;
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <nav>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
        <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
        <nav>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>