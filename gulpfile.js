var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var path = 'themes/daffodilday/styles/';

gulp.task('styles', function() {
    gulp.src(path+'sass/**/*.scss')
    	.pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
    	.pipe(autoprefixer())
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path+'css/'));
});

gulp.task('default',function() {
    gulp.watch(path+'sass/**/*.scss',['styles']);
});