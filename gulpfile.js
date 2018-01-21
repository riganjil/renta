var elixir = require('laravel-elixir');
require('laravel-elixir-sass-compass');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(function (mix) {
    mix.compass("app.scss", "public/css", {
        sass: "public/scss",
        font: "public/fonts",
        image: "public/images",
        javascript: "public/js",
        sourcemap: true
    });
});