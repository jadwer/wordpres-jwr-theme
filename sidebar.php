<aside class="bg-red-500 w-1/4 p-10">
    <?php if (is_active_sidebar('principal')) : ?>
        <?php dynamic_sidebar('principal'); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</aside>