'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    concat = require("gulp-concat"),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    rimraf = require('rimraf'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload;

var path = {
    build: {
        html: 'build/',
        js: 'build/js/',
        css: 'build/css/',
        img: 'build/img/',
        fonts: 'build/fonts/',
        pagesCss: 'build/css/'
    },
    src: {
        html: 'src/html/*.html',
        js: 'src/js/*.js',
        style: 'src/sass/main.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*',
        pagesCss: 'src/sass/pages/*.scss',
        settingsJs: 'src/js/theme-settings/*.js',
        colorSettings: 'src/sass/partials/color-settings.scss'
    },
    watch: {
        html: 'src/**/*.html',
        js: 'src/js/**/*.js',
        style: 'src/sass/**/*.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*',
        pagesCss: 'src/sass/pages/*.scss',
        settingsJs: 'src/js/theme-settings/*.js',
        colorSettings: 'src/sass/partials/color-settings.scss'
    },
    clean: './build'
};

gulp.task('html:build', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(uglify())
        .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}));
});

gulp.task('style:build', function () {
    gulp.src(path.src.style)
        .pipe(sass())
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
    gulp.src(path.src.img)
        .pipe(gulp.dest(path.build.img))
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('plugins:build', function() {
    gulp.src([
        './node_modules/jquery/dist/jquery.js',
        './node_modules/popper.js/dist/umd/popper.js',
        './node_modules/bootstrap/dist/js/bootstrap.js'
    ])
        .pipe(concat('vendor.min.js'))
        .pipe(uglify())
        .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
        .pipe(gulp.dest(path.build.js));

    gulp.src([
        './node_modules/font-awesome/css/font-awesome.min.css',
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/animate.css/animate.min.css'
    ])
        .pipe(concat('vendor.min.css'))
        .pipe(gulp.dest(path.build.css));

    gulp.src([
        './node_modules/font-awesome/fonts/*.fonts'
    ])
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('settings:build', function() {
    gulp.src(path.src.settingsJs)
        .pipe(concat('settings.min.js'))
        .pipe(uglify())
        .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
        .pipe(gulp.dest(path.build.js));

    gulp.src(path.src.colorSettings)
        .pipe(sass())
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

gulp.task('pagesCss:build', function() {
    gulp.src(path.src.pagesCss)
        .pipe(sass())
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.pagesCss))
        .pipe(reload({stream: true}));
});

gulp.task('build', [
    'html:build',
    'js:build',
    'style:build',
    'image:build',
    'fonts:build',
    'plugins:build',
    'settings:build',
    'pagesCss:build'
]);

gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
    watch([path.watch.settingsJs], function(event, cb) {
        gulp.start('settings:build');
    });
    watch([path.watch.colorSettings], function(event, cb) {
        gulp.start('settings:build');
    });
    watch([path.watch.pagesCss], function(event, cb) {
        gulp.start('pagesCss:build');
    });
});

// Configure the browserSync task
gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: "./build"
        },
        host: 'localhost',
        port: 9000,
        logPrefix: "Musa"
    })
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('default', ['browserSync', 'build', 'watch']);