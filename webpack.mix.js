let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss'])
    ]
});

mix
    .js('source/_assets/js/main.js', 'js')
    .extract(['vue'])
    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/vendor.scss', 'css')
    .version();
