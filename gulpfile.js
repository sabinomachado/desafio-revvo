const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'));
const concatCss = require('gulp-concat-css');


gulp.task('sass', function () {
    return gulp.src('src/Sass/*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(concatCss("revvo.css"))
    .pipe(gulp.dest('public/assets/css'));
});

gulp.task('watch', function () {
    gulp.watch('src/Sass/*.sass', gulp.series('sass'));
  })

gulp.task('default', function(){
    console.log("Running...")
});