const mix = require('laravel-mix');
const path = require('path');
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

mix.js('resources/js/app.js', 'public/js').vue()
.sass('resources/sass/app.scss', 'public/css/')
.styles([
        // "resources/css/bootstrap/bootstrap.css",
        // "resources/css/animate.css",
        // "resources/css/font-awesome.min.css",
        // "resources/css/jquery-ui.css",
        // "resources/css/line-awesome.min.css",
        // "resources/css/magnific-popup.css",
        // "resources/css/owl.carousel.css",
        // "resources/css/select2.min.css",
        // "resources/css/simple-line-icons.css",
        // "resources/css/slick.css",
        // "resources/css/trumbowyg.min.css",
        // "resources/css/venobox.css",
        "resources/css/style.css",
        "resources/css/styles.css"
    ], 'public/css/styles.css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    devServer: {
        proxy: {
            '*': 'http://localhost:8000'
        }
    }
});
