// -- Imports ----------------------------------------- //
    var gulp = require('gulp');
    var cssnano = require('gulp-cssnano');
    var sourcemaps = require('gulp-sourcemaps');
    const sass = require('gulp-sass')(require('sass'));
// ---------------------------------------------------- //

// -- Variables --------------------------------------- //
    var scssFiles   = 'includes/css/SASS/style.scss',
        scssWatch   = 'includes/css/SASS/**/*.scss',
        cssDest     = 'includes/css';
// ---------------------------------------------------- //

// -- Scss -------------------------------------------- //
    gulp.task('compileScss', function(){
        return gulp.src(scssFiles)
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(cssnano())
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest(cssDest))
    });
// ---------------------------------------------------- //

// -- Watch ------------------------------------------- //
    gulp.task('default',function(){
        gulp.watch(scssWatch, gulp.series('compileScss'));
    })
// ---------------------------------------------------- //
