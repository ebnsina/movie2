const mix = require('laravel-mix');

mix.styles([
    'public/css/font-awesome.css',
    'public/css/app.css',
    'public/css/movie.css',
    'public/css/responsive.css',
], 'public/css/all.css')
    .version();

mix.js('resources/js/app.js', 'public/js')
    .version()
    .sourceMaps();

