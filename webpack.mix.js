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

// const path = require('path')
// mix.webpackConfig({
//     output: { chunkFilename: 'js/[name].js?id=[chunkhash]' },
//     resolve: {
//         alias: {
//             'vue$': 'vue/dist/vue.runtime.esm.js',
//             '@': path.resolve('./resources/js'),
//         },
//     },
// });


mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/css/app.scss', 'public/css', [
        require('postcss-import'),
    ])
    .postCss('resources/css/login.css', 'public/css', [
        require("tailwindcss"),
    ]);
