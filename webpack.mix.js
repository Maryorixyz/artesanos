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

mix.js('resources/js/index.js', 'public/js')
    .css('resources/css/vendor.css', 'public/css')

    .css('resources/css/index.css', 'public/css')


    .css('resources/css/catalogo.css', 'public/css')

    .css('resources/css/nosotros.css', 'public/css')

    .css('resources/css/contactanos.css', 'public/css')

    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}