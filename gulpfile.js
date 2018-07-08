// Sass compile task

// Load gulp plugin
const gulp = require('gulp');
// Load Sass plugin
const sass = require('gulp-sass');
// Load gulp plugin for listing package.json dependencies and copy dist files of them to specific folder
const npmDist = require('gulp-npm-dist');



// Watching style.scss
gulp.task('default', ['copy:libs'], function () {
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

// Copy dependencies to ./public/libs/
gulp.task('copy:libs', function() {
    gulp.src(npmDist(), {base:'./node_modules'})
        .pipe(gulp.dest('./libs'));
});
