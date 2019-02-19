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
 mix.scripts([
        'node_modules/jquery-validation/dist/jquery.validate.js',
        'node_modules/jquery-validation/dist/addtional-methods.js'
    ],  'public/js/jquery-validation.js');
mix.scripts([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/jquery/dist/jquery-loading.js',
        'node_modules/popper.js/dist/popper.js',
        'node_modules/bootstrap/dist/js/bootstrap.js'
    ],  'public/js/libraries.js')
	.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
	.copy('node_modules/cesium/Build/Cesium', 'public/cesium')
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/@fortawesome/fontawesome-free/css/all.css'
    ],  'public/css/libraries.css');
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
