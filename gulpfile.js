var elixir =  require('laravel-elixir');
var gulp = require('gulp');
var babel = require('gulp-babel');
var uglify = require("gulp-uglify");


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
       .scripts('app.js');
});

gulp.task('js', function() {
  return gulp.src('resources/assets/**/*.js')
      .pipe(babel({ presets: ['es2015'] }))
      .pipe(uglify())
      .pipe(gulp.dest('public/'));
});