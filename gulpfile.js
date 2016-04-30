var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.sass('app.scss')
    	.scripts(['components/*.js','main.js'],'public/js/all.js');
});
