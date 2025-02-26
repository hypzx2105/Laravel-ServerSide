const mix = require('laravel-mix');

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ])
    .options({
        processCssUrls: false,
    });

if (mix.inProduction()) {
    mix.version();
}
