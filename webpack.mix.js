let mix = require('laravel-mix');

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

// Laravel App
// https://laravel.com
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sourceMaps(true,'hidden-source-map');

// Bootstrap 4
// https://getbootstrap.com/docs/4.0/getting-started/introduction/
mix.scripts('node_modules/popper.js/dist/umd/popper.js', 'public/js/popper.js')
    .sourceMaps(true, 'source-map');
mix.js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')
    .sourceMaps(true, 'source-map');
mix.styles(
        [ 'node_modules/bootstrap/dist/css/bootstrap.css',
            'node_modules/bootstrap/dist/css/bootstrap-grid.css',
            'node_modules/bootstrap/dist/css/bootstrap-reboot.css',
        ], 'public/css/bootstrap.css' )
    .sass( 'node_modules/bootstrap/scss/bootstrap.scss', 'public/css' )
    .sourceMaps(true,'hidden-source-map');

// DataTables.net
// https://datatables.net/download/index
mix.scripts(
    [
        'node_modules/datatables.net/js/jquery.dataTables.js',
        'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js',
        'node_modules/datatables.net-buttons/js/dataTables.buttons.js',
        'node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.js',
        'node_modules/jszip/dist/jszip.js',
        'node_modules/pdfmake/build/pdfmake.js',
        'node_modules/pdfmake/build/vfs_fonts.js',
        'node_modules/datatables.net-buttons/js/buttons.html5.js',
        'node_modules/datatables.net-buttons/js/buttons.print.js',
        'node_modules/datatables.net-buttons/js/buttons.colVis.js',
        'node_modules/datatables.net-fixedheader-bs4/js/fixedHeader.bootstrap4.js',
        'node_modules/datatables.net-responsive/js/dataTables.responsive.js',
        'node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.js',
    ], 'public/js/datatables.js' )
    .styles(
        [ 'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css',
            'node_modules/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.css',
            'node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.css',
        ],
        'public/css/datatables.css');
mix.copy('node_modules/pdfmake/build/pdfmake.js.map', 'public/js');

// jQuery.js
// https://jquery.com
mix.scripts(
    [ 'node_modules/jquery/dist/jquery.js',
    ], 'public/js/jquery.js' );
