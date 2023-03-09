const { src, dest, watch, series} = require('gulp');
const server = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  return src('./styles/scss/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./styles/css/'));
};

// exports.buildStyles = buildStyles;
exports.watch = function () {
  watch('./styles/scss/**/*.scss', ['sass']);
};

function serverLaunch(done){
  server.init({
    server: {
      baseDid: '.'
    }
  });
  done();
}

function serverReload(done){
  server.reload();
  done();
}

function watchTask(){
  watch('./styles/scss/**/*.scss', series(buildStyles, serverReload));
}

exports.default = series(
  buildStyles,
  serverLaunch,
  watchTask
);