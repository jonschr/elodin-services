//* Vars
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var sassGlob = require('gulp-sass-glob');

//* Tasks
gulp.task('style', function () {
    return gulp
        .src('css/elodin-services.scss')
        .pipe(sassGlob())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css/'))
});

//* Watchers here
gulp.task('watch', function () {
    gulp.watch('css/**/*.scss', gulp.series(['style']));
})

gulp.task('default', gulp.series(['watch']));
