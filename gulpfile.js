const server = require('browser-sync').create();
const { src, dest, watch, series } = require('gulp');
const concat = require('gulp-concat');
const cssMinify = require('gulp-css-minify');
const jsUglify = require('gulp-uglify');

function htmlTask(){
    return src([
        './template-parts/common/common.html',
        './template-parts/header/header.html',
        './template-parts/section-1/section-1.html',
        './template-parts/section-2/section-2.html',
        './template-parts/section-3/section-3.html',
        './template-parts/popups-form/consulta.html',
        './template-parts/popups-form/exame.html',
        './template-parts/privacy-policy/privacy-policy.html',
        './template-parts/footer/footer.html'
    ])
        .pipe(concat('index.html'))
        .pipe(dest('./'));
}

function cssTask(){
    return src([
        './template-parts/common/normalize.css',
        './template-parts/common/common.css',
        './template-parts/header/header.css',
        './template-parts/section-1/section-1.css',
        './template-parts/section-2/section-2.css',
        './template-parts/section-3/section-3.css',
        './template-parts/popups-form/popup.css',
        './template-parts/privacy-policy/privacy-policy.css',
        './template-parts/footer/footer.css'
    ])
        .pipe(concat('style.css'))
        .pipe(cssMinify())
        .pipe(dest('./'));
}

function jsTask(){
    return src([
        './scripts/js/carousel.js',
        './scripts/js/form.js',
        './scripts/js/menu.js',
        './scripts/js/popups.js',
        './scripts/js/privacy-policy.js'
    ])
        .pipe(concat('script.js'))
        // .pipe(jsUglify())
        .pipe(dest('./'))
}

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
    watch('./template-parts/**/*.html', series(htmlTask, serverReload));
    watch('./template-parts/**/*.css', series(cssTask, serverReload));
    watch('./scripts/**/*.js', series(jsTask, serverReload));
}

exports.default = series(
    htmlTask,
    cssTask,
    jsTask,
    serverLaunch,
    watchTask
);