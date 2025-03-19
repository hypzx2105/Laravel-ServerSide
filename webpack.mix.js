const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css") // Compile SCSS properly
    .options({
        processCssUrls: false,
        postCss: [
            require("tailwindcss"), 
            require("autoprefixer")
        ],
    });

if (mix.inProduction()) {
    mix.version();
}
