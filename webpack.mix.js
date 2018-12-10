const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.copyDirectory('resources/fonts', 'public/fonts');
mix.styles([
        'resources/css/bootstrap.min.css',
        'resources/css/font-awesome.min.css',
        'resources/css/style.css',
        'resources/css/blog.css',
    ], 'public/css/all.css');
mix.scripts([
        'resources/js/main.js',
        'resources/js/jquery.stellar.min.js'
	], 'public/js/all.js');
mix.js('resources/js/bootstrap.js', 'public/js');

