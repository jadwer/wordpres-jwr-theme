const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('./assets/css/jwr-theme-style.css', './assets/css/style.css',
  tailwindcss('./tailwind.config.js')
);
