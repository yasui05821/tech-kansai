var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("default",function(){
   gulp.src(["./scss/*.scss"])
       .pipe(sass())
       .pipe(gulp.dest("./css"))
    gulp.watch(["./scss/*.scss"],["sass"])

});