const remix = require('laravel-mix');

remix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');