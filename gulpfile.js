var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var path = './wp-content/themes/carolinaspa/';

gulp.task('sass', function () {
    gulp.src(path + '*.scss')
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(gulp.dest(path));
});

gulp.task('watch', function () {
    gulp.watch(path + '**/*.scss', ['sass']);
});

