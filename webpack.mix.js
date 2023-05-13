const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
mix.copyDirectory('node_modules/bootstrap-icons/font/fonts', 'public/css/fonts');
mix.copyDirectory('node_modules/datatables/media/images', 'public/images');

mix.sass('resources/scss/style.scss', 'public/css/style.css');
mix.sass('resources/scss/style.dark.scss', 'public/css/style.dark.css');

mix.styles([
    'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
    'node_modules/bootstrap-icons/font/bootstrap-icons.css',
    'node_modules/select2/dist/css/select2.min.css',
    'node_modules/toastr/build/toastr.min.css',
    'node_modules/flatpickr/dist/flatpickr.min.css',
    'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
    'node_modules/daterangepicker/daterangepicker.css',
    'node_modules/datatables/media/css/jquery.dataTables.min.css',
    'node_modules/fullcalendar/main.min.css'
], 'public/css/third-party.css');

mix.sass('resources/scss/plugins.scss', 'public/css/plugins.css');
mix.sass('resources/scss/plugins.dark.scss', 'public/css/plugins.dark.css');

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/select2/dist/js/select2.min.js',
    'node_modules/toastr/build/toastr.min.js',
    'node_modules/flatpickr/dist/flatpickr.min.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'node_modules/moment/min/moment.min.js',
    'node_modules/daterangepicker/daterangepicker.js',
    'node_modules/datatables/media/js/jquery.dataTables.min.js',
    'node_modules/fullcalendar/main.min.js'
], 'public/js/vendor.js');

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/plugins.js', 'public/js/plugins.js').
    js('resources/assets/js/users/users.js',
        'public/assets/js/users/users.js');
