// include gulp

var gulp = require('gulp');

// include plug-ins to do task. gulp-concat, gulp-uglify,gulp-strip-debug

var concat = require('gulp-concat');

var stripDebug = require('gulp-strip-debug');

var uglify = require('gulp-uglify');

// Task to concat all JS files, strip debugging and minify

gulp.task('scripts', function() {

  gulp.src('js/*.js')                            // define source directory where ur js files

    .pipe(concat('script.js'))              //define concatination & name for out put file

    .pipe(stripDebug())                     //Useful for making sure you didn't leave any logging in production code.

    .pipe(uglify())                              // make outputfile compress/beautifier

    .pipe(gulp.dest('js/dest/'));          // define destination dir to store files

});