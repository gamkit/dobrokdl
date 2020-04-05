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
/* 
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css'); */


mix.scripts('../../../frontend/layouts/works/kdl/dist/js/*.js', 'public/js/app.js').version();
mix.styles("../../../frontend/layouts/works/kdl/dist/css/*.css", 'public/css/style.css').version();

mix.copy("../../../frontend/layouts/works/kdl/dist/fonts", 'public/fonts');
mix.copy("../../../frontend/layouts/works/kdl/dist/img", 'public/img');
mix.copy("../../../frontend/layouts/works/kdl/dist/uploads", 'public/uploads');



