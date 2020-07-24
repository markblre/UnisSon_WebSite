const gulp = require("gulp");
const sass = require("gulp-sass");

gulp.task('sass', function () {
  return gulp.src("./src/app.scss")
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist'));
});