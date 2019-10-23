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
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/css/croppie.css', 'public/css/croppie.css')
    .copyDirectory('resources/assets', 'public/assets')
    .copyDirectory('resources/admin', 'public/admin')
    .copyDirectory('resources/assets/vendors', 'public/assets/vendors')
    .copyDirectory('resources/source/assets', 'public/source/assets')
    .copyDirectory('resources/source/image', 'public/source/image')
    .copyDirectory('resources/theme', 'public/theme');
    