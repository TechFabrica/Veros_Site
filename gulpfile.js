const { src, dest, watch, series } = require('gulp');
const server = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  return src('./assets/styles/scss/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./assets/styles/css/'));
};

function serverLaunch(done){
  server.init({
    server: {
      baseDir: '.'
    }
  });
  done();
}

function serverReload(done){
  server.reload();
  done();
}

function watchTask(){
  watch('./assets/styles/scss/**/*.scss', buildStyles); //series(buildStyles, serverReload)
}

exports.default = series(
  buildStyles,
  // serverLaunch,
  watchTask
);