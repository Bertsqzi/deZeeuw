'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('watch', gulp.series('sass', function() { 
    gulp.watch('src/scss/**/*.scss').on('change', gulp.parallel('sass'));
}));

gulp.task('default', gulp.series('sass','watch'));