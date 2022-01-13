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

mix.js('resources/js/vendor.js', 'public/js')
    .css('resources/css/vendor.css', 'public/css')

    .js('resources/js/index.js', 'public/js')
    .css('resources/css/index.css', 'public/css')

    .js('resources/js/asociaciones.js', 'public/js')
    .css('resources/css/asociaciones.css', 'public/css')

    .js('resources/js/asociacion-detalle.js', 'public/js')
    .css('resources/css/asociacion-detalle.css', 'public/css')

    .js('resources/js/catalogo.js', 'public/js')
    .css('resources/css/catalogo.css', 'public/css')

    .js('resources/js/artesano-perfil.js', 'public/js')
    .css('resources/css/artesano-perfil.css', 'public/css')

    .js('resources/js/producto-detalle.js', 'public/js')
    .css('resources/css/producto-detalle.css', 'public/css')

    .css('resources/css/nosotros.css', 'public/css')

    .css('resources/css/contactanos.css', 'public/css')

    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}