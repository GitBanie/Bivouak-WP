var gulp = require('gulp'),
  // Prepare les plugins
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create(),
  postcss = require('gulp-postcss'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  imagemin = require('gulp-imagemin'),

  // Workflow
  source = './src', // dossier de travail
  destination = './dist'; // dossier de production


// CSS via Sass et Autoprefixer
gulp.task('css', function() {
  return gulp.src(source + '/assets/sass/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed',
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
gulp.task('js', function() {
  return gulp.src([
      'node_modules/jquery/dist/jquery.js',
      'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
       source + '/assets/js/fontawesome-all.min.js',
       source + '/assets/js/google-autocomplete.js',
       source + '/assets/js/app.js'
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest(destination + '/js/'));
});

//Image
gulp.task('img', function() {
  return gulp.src(source + '/assets/img/*.{png,jpg,gif,svg}')
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest(destination + '/img/'));
});

// Watch
gulp.task('watch', function() {
  browserSync.init({
    proxy: 'http://localhost/bivouak/',
  });
  gulp.watch([destination + '/css/', source + '/assets/sass/*.scss'], ['css']);
  gulp.watch([destination + '/css/', source + '/assets/sass/sections/*.scss'], ['css']);
  gulp.watch(source + '/assets/js/*.js', ['js']);
  gulp.watch('./*.php').on('change', browserSync.reload);
});


// Watch associé à la task default pour pouvoir la lancer avec la commande $ gulp
gulp.task('default', ['watch']);
