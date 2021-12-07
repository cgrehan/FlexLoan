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
    // .js([
    //     '/assets/js/bootstrap.bundle.min.js',
    //     '/assets/js/perfect-scrollbar.min.js',
    //     '/assets/js/jquery.mousewheel.min.js',
    //     '/assets/plugins/custom/prismjs/prismjs.bundle.js',
    // ],'public/js/bundle.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
