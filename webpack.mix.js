const path = require("path");
const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.sass("resources/sass/app.scss", "public/css")
    .js("resources/js/app.js", "public/js")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    });

// Inertia JS
mix.webpackConfig({
    output: { chunkFilename: "js/[name].js?id=[chunkhash]" },
    resolve: {
        alias: {
            vue$: "vue/dist/vue.runtime.esm.js",
            "@": path.resolve("resources/js")
        }
    }
}).babelConfig({
    plugins: ["@babel/plugin-syntax-dynamic-import"]
});
