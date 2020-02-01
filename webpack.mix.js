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

if (mix.inProduction()) {
    mix.options({
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    });
}

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
        'public/vendor/dashboard/assets/js/kt-global.js',
        'public/vendor/dashboard/assets/plugins/global/plugins.bundle.js',
        'public/vendor/dashboard/assets/js/scripts.bundle.js',
    ], 'public/js/all.js')
    .scripts([
        'resources/views/Admin/customer/bootstrap-datepicker.js',
        'resources/views/Admin/customer/customer.js',
    ], 'public/js/pages/customer.js');
