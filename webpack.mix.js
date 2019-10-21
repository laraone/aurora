let mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss');
const glob = require('glob-all');
require('laravel-mix-purgecss');

mix.webpackConfig({
    resolve: {
        alias: {
            root: path.resolve(__dirname, './resources/js'),
            styles: path.resolve(__dirname, './resources/sass'),
            frontend: path.resolve(__dirname, './resources/js/frontend'),
            utils: path.resolve(__dirname, './resources/js/utils'),
            directives: path.resolve(__dirname, './resources/js/directives'),
        }
    }
});

mix.setPublicPath('theme/assets')
    .js('resources/js/frontend/app.js', 'js')
    .sass('resources/sass/styles.scss', 'css/styles.css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })

mix.version();
