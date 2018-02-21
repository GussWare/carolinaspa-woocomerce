var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var path = './wp-content/themes/carolinaspa/';

gulp.task('sass', function () {
    gulp.src(path)
        .pipe(sass({
            outputStyle: 'expanded',
            sourceComments: true
        }))
        .pipe(gulp.dest(path));
});

gulp.task('watch', function () {
    gulp.watch(path + '**/*.scss', ['sass']);
});