const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
    return gulp.src('./src/sass/*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./src/css'));
});

gulp.task('watch', function () {
    gulp.watch('./src/sass/*.sass', gulp.series('sass'));
  })

gulp.task('default', function(){
    console.log("Running...")
});