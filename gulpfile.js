const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  return gulp.src('./styles/scss/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./styles/css/'));
};

exports.buildStyles = buildStyles;
exports.watch = function () {
  gulp.watch('./styles/scss/**/*.scss', ['sass']);
};

exports.default = buildStyles;