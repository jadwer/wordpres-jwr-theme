<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'principal' ) ) : ?>
        <?php dynamic_sidebar( 'principal' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>