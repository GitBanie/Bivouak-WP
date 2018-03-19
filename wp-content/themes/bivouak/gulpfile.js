var gulp = require('gulp'),
  // Prepare and optimize code etc
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create(),
  postcss = require('gulp-postcss'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  imagemin = require('gulp-imagemin'),

  // Only work with new or updated files
  newer = require('gulp-newer'),

  // Name of workflow
  source = './src', // dossier de travail
  destination = './dist'; // dossier à livrer


// CSS via Sass and Autoprefixer
gulp.task('css', function() {
  return gulp.src(source + '/assets/sass/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      // outputStyle: 'compressed',
      outputStyle: 'expanded',
      indentType: 'tab',
      indentWidth: '1'
    }).on('error', sass.logError))
    .pipe(postcss([
      autoprefixer('last 2 versions', '> 1%')
    ]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(destination + '/css/'));
});

// JavaScript
gulp.task('javascript', function() {
  return gulp.src([
      'node_modules/jquery/dist/jquery.js',
      'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
       source + '/assets/js/fontawesome-all.min.js',
       source + '/assets/js/app.js'
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest(destination + '/js/'));
});

//Image
gulp.task('img', function() {
  return gulp.src(source + '/assets/img/*.{png,jpg,gif}')
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest(destination + '/img/'));
});

// Watch everything
gulp.task('watch', function() {
  browserSync.init({
    proxy: 'http://localhost/bivouak/',
  });
  gulp.watch([destination + '/css/', source + '/assets/sass/*.scss'], ['css']);
  gulp.watch([destination + '/css/', source + '/assets/sass/sections/*.scss'], ['css']);
  gulp.watch(source + '/assets/js/*.js', ['javascript']);
  gulp.watch(source + '/assets/img/*.{png,jpg,gif}', ['img']);
  gulp.watch('./*.html').on('change', browserSync.reload);
  //Si on veut watcher le css (faire la meme chose pour le js)
  // gulp.watch(source + "/assets/sass/*.scss", ['css']).on('change', browserSync.reload);
});


// Default task (runs at initiation: gulp --verbose)
gulp.task('default', ['watch']);
