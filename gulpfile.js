//noinspection JSUnresolvedFunction
const elixir = require('laravel-elixir');
//noinspection JSUnresolvedFunction
const postStylus = require('poststylus');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    //noinspection JSUnresolvedVariable
    mix
        .rollup('app.js')
        .stylus('app.styl', null, {
            compress: false,
            'inline css': true,
            set: ['resolve url'],
            rawDefine: {
                $basePath: __dirname + '/'
            },
            use: [postStylus(['lost'])]
        });
});
