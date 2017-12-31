// Sass compile task

// Load gulp plugin
const gulp = require('gulp');
// Load Sass plugin
const sass = require('gulp-sass');

// Watching style.scss
gulp.task('default', function () {
    gulp.watch('style.scss', function () {
        // Task when style.scss is updated
        gulp.src('style.scss')
        // Start compile
            .pipe(sass({
                outputStyle: 'expanded'
            })
            // Display Sass compile error.  Compiler will stop without this.
                .on('error', sass.logError))
            // Save changes on the css directory
            .pipe(gulp.dest(''));
    });
});
