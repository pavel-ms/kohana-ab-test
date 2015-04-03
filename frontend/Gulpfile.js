var gulp = require('gulp')
	//, replace = require('gulp-replace')
	, concat = require('gulp-concat')
	, less = require('gulp-less')
	, uglify = require('gulp-uglify')
	, minifyCSS = require('gulp-minify-css')
	, runSequence = require('run-sequence');

/**
 * Файлы в порядке конкатенации
 * @type {string[]}
 */
var jsFiles = [
	// libs
	'./bower_components/jquery/dist/jquery.js'
	, './bower_components/underscore/underscore.js'
];

gulp.task('concat-js', function() {
	// place code for your default task here
	return gulp.src(jsFiles)
		.pipe(concat({ path: 'main.js'}))
		//.pipe(uglify())
		.pipe(gulp.dest('../public/static/'));
});

gulp.task('styles', function() {
	gulp.src('./less/main.less')
		.pipe(less())
		.pipe(minifyCSS())
		.pipe(gulp.dest('../public/static/'));
});

gulp.task('js', function() {
	runSequence('concat-js');
});

gulp.task('watch', function() {
	runSequence('js', 'styles');
	gulp.watch('./**/*', ['js', 'styles'])
		.on('change', function (event) {
			console.log('Event type: ' + event.type);
		});

});