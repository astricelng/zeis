let mix = require('laravel-mix');
let webpack = require('webpack');

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
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/

let compilation = false;

if (compilation)
{

    // Web assets compilation
    mix.setResourceRoot('../');
    mix.setPublicPath(path.normalize('public/assets/www'));
    mix.autoload(
        {
            jquery: ['$', 'jquery', 'window.jQuery', 'jQuery']
        }
    );

    mix.webpackConfig(
        {
            resolve: {
                alias: {
                    'ScrollMagicGSAP': 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap',
                }
            },

            module: {
                rules: [
                    {
                        test: /\.jsx?$/,
                        parser: {
                            amd: false
                        }
                    },
                ]
            }
        }
    );

    const resourcesPath = 'resources/assets/www/';

    mix
        .copyDirectory(resourcesPath + 'images', 'public/assets/www/images')
        .sass(resourcesPath + 'sass/app.scss', 'css/app.css')
        .js(resourcesPath + 'js/app.js', 'js/app.js')
        .js(resourcesPath + 'js/SmoothScroll.js', 'js/SmoothScroll.js')
        .js(resourcesPath + 'js/jquery.prettyPhoto.js', 'js/jquery.prettyPhoto.js')
        .js(resourcesPath + 'js/jquery.isotope.js', 'js/jquery.isotope.js')
        .js(resourcesPath + 'js/jquery.parallax.js', 'js/jquery.parallax.js')
        .js(resourcesPath + 'js/main.js', 'js/main.js')
        .sass(resourcesPath + 'sass/pages/home/index.scss', 'css/pages/home.css')
        .sourceMaps()
    ;
}

if (!compilation)
{
    // Admin assets compilation

    mix.js('resources/assets/admin/js/app.js', 'public/assets/admin/js')
   .sass('resources/assets/admin/sass/app.scss', 'public/assets/admin/css');
}

