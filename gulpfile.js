var
  gulp = require('gulp'),
  $ = require('gulp-load-plugins')();

var reportOptions = {
  err: true, // default = true, false means don't write err
  stderr: false, // default = true, false means don't write stderr
  stdout: true // default = true, false means don't write stdout
};

// 処理対象のファイルは各設定のほうで指定しているので、gulp内では指定しない

gulp.task('lint', function() {
  gulp
    .src('')
    .pipe($.exec('composer run-script style-check-dryrun', {'continueOnError': true}))
    .pipe($.exec.reporter(reportOptions));
});

gulp.task('unit-test', function() {
  gulp
    .src('')
    .pipe($.exec('composer run-script unit-test', {'continueOnError': true}))
    .pipe($.exec.reporter(reportOptions));
});

gulp.task('watch', function() {
  gulp.watch('./*/**.php', ['lint', 'unit-test']);
});
