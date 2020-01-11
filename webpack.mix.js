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

mix.react('resources/js/usuario/app.js',            'public/js')
   .react('resources/js/administrador/admin.js',    'public/js')
   .sass('resources/sass/usuario/app.scss',         'public/css')
   .sass('resources/sass/administrador/admin.scss', 'public/css');