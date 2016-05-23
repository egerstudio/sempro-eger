var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss')
    	.scripts([
    		'libs/jquery-2.2.4.min.js',
    		'libs/bootstrap-3.3.6.min.js',
    		'libs/sweetalert.min.js',
    		'libs/speakingurl.min.js',
    		'libs/jquery.stringtoslug.min.js',
    	], './public/js/libs.js')
    	.styles([
    		'libs/sweetalert.css'
    	], './public/css/libs.css')
    	.version(['css/app.css']);
});
