const mix = require('laravel-mix')
const SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

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

let urlPatternForImageCaching;
let mixEnv = process.env.MIX_ENV;

switch (mixEnv) {
    case 'staging':
        urlPatternForImageCaching = /^https:\/\/www\.playon\.parafrasa\.com\/images\/(\w+)\.jpg/;
        break;
    case 'production':
        urlPatternForImageCaching = /^https:\/\/www\.plazakreatif\.com\/images\/(\w+)\.jpg/;
        break;
    default:
        urlPatternForImageCaching = /^https:\/\/www\.plazakreatif\.test\/images\/(\w+)\.jpg/;
        break
}

mix.js('resources/js/app.js', 'public/js')
    .extract(['vue', 'jquery'])
    .sass('resources/sass/vendor.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')

mix.webpackConfig({
    plugins: [
        new SWPrecacheWebpackPlugin({
            cacheId: 'pwa',
            filename: 'service-worker.js',
            staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
            minify: true,
            stripPrefix: 'public/',
            handleFetch: true,
            dynamicUrlToDependencies: { //you should add the path to your blade files here so they can be cached
                //and have full support for offline first (example below)
                '/': ['resources/views/pages/home.blade.php'],
                // '/posts': ['resources/views/posts.blade.php']
            },
            staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
            navigateFallback: '/',
            runtimeCaching: [
                {
                    urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                    handler: 'cacheFirst'
                },
                {
                    urlPattern: urlPatternForImageCaching,
                    handler: 'cacheFirst'
                }
            ],
            // importScripts: ['./js/push_message.js']
        })
    ]
});

mix.browserSync('plaza-kreatif.test');

