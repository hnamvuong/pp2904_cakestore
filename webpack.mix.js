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
    .copy('resources/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css', 'public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')
    .copy('resources/assets/vendors/base/vendors.bundle.css', 'public/assets/vendors/base/vendors.bundle.css')
    .copy('resources/assets/demo/demo9/base/style.bundle.css', 'public/assets/demo/demo9/base/style.bundle.css')
    .copy('resources/assets/demo/demo9/media/img/logo/favicon.ico', 'public/assets/demo/demo9/media/img/logo/favicon.ico')
    .copy('resources/assets/vendors/base/vendors.bundle.js', 'public/assets/vendors/base/vendors.bundle.js')
    .copy('resources/assets/demo/demo9/base/scripts.bundle.js', 'public/assets/demo/demo9/base/scripts.bundle.js')
    .copy('resources/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js', 'public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')
    .copy('resources/assets/app/js/dashboard.js', 'public/assets/app/js/dashboard.js')
    .copy('resources/assets/demo/demo9/media/img/logo/logo.png', 'public/assets/demo/demo9/media/img/logo/logo.png')
    .copy('resources/assets/app/media/img/users/user4.jpg', 'public/assets/app/media/img/users/user4.jpg')
    .copy('resources/css/croppie.css', 'public/css/croppie.css')
    .copyDirectory('resources/admin', 'public/admin');
    