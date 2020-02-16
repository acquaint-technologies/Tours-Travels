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
    ], 'public/js/pages/customer.js')
    .scripts([
        'resources/views/Admin/passport/bootstrap-datepicker.js',
    ], 'public/js/pages/passport.js')
    .scripts([
        'resources/views/Admin/hajj/bootstrap-datepicker.js',
    ], 'public/js/pages/haji.js')
    .scripts([
        'resources/views/Admin/hajj-payment/bootstrap-datepicker.js',
    ], 'public/js/pages/hajj-payment.js')
    .scripts([
        'resources/views/Admin/package/bootstrap-pickers.js',
    ], 'public/js/pages/package.js')
    .scripts([
        'resources/views/Admin/accounts/expense/bootstrap-pickers.js',
    ], 'public/js/pages/accounts/expense.js');
