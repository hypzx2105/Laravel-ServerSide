const mix = require('laravel-mix');


mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css', {
        sassOptions: {
            outputStyle: 'compressed'
        }
    })
    .options({
        postCss: [
            require('postcss-import'),
            require('tailwindcss'),
            require('postcss-nested'),
            require('autoprefixer'),
        ]
    });

if (mix.inProduction()) {
    mix.version();
}
