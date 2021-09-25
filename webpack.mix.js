let mix = require('laravel-mix');

mix
    .js('assets/js/app.js', 'assets/js/scripts.js')
    .sass('assets/css/jwr-theme-style.scss', 'assets/css/style.css')
    .options({
        processCssUrls: false, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
        postCss: [require('tailwindcss')], // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
    })
    .browserSync({
        proxy: process.env.MIX_APP_HOST,
        host: process.env.MIX_APP_HOST,
        open: 'external',
        files: ['./**/*.php', './**/*.css', './**/*.js'],
    });