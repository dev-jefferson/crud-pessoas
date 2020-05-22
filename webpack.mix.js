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

 mix.js('resources/js/app.js', 'public/js')
     .sass('resources/sass/app.scss', 'public/css')
 */

mix
    .sass('resources/views/scss/styles.scss', 'public/css/styles.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js')
    .js('resources/js/jquery.maskedinput-1.1.4.pack.js', 'public/js/jquery.maskedinput-1.1.4.pack.js')
    .js('resources/js/script.js', 'public/js/script.js')
    .js('resources/js/pessoa.js', 'public/js/pessoa.js');
