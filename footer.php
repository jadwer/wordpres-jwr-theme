    </div>
    <footer class="flex bg-gray-700 text-gray-400 justify-center mx-auto">
        <?php
            get_template_part('./template-parts/footer-copy');
            get_template_part('./template-parts/footer-menu');
            get_template_part('./template-parts/footer-social');
        ?>
    </footer>
    <?php wp_footer(); ?>
</body>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.5'><\/script>".replace("HOST", location.hostname));
//]]></script>
</html>