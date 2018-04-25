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

mix.js('resources/assets/mobile/js/app.js', 'public/mobile/js') // 将 mobile/app.js 注册为移动端前端入口文件
   .sass('resources/assets/mobile/sass/app.scss', 'public/mobile/css')
    // .copyDirectory('resources/assets/mobile/sass/app.scss','public/mobile/css/app.scss')
    .copyDirectory('resources/assets/desktop/editor/js','public/desktop/js') // 富文本编辑器依赖
    .copyDirectory('resources/assets/desktop/editor/css','public/desktop/css'); // 富文本编辑器依赖
