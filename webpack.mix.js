let mix = require('laravel-mix');
const path = require('path');


mix.webpackConfig({
    resolve: {
        alias: {
            root: path.resolve(__dirname, './src/resources/js'),
            styles: path.resolve(__dirname, './src/resources/sass'),
            frontend: path.resolve(__dirname, './src/resources/js/frontend'),
            utils: path.resolve(__dirname, './src/resources/js/utils'),
            directives: path.resolve(__dirname, './src/resources/js/directives'),
        }
    }
});

mix.setPublicPath('build/theme/assets')
    .js('src/resources/js/frontend/app.js', 'js')
    .sass('src/resources/sass/styles.scss', 'css/styles.css')
    .copyDirectory('src/resources/images', 'build/theme/assets/images')
;

mix.version();