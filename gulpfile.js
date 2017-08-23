var gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourceMaps = require('gulp-sourcemaps'),
	autoPrefixer = require('gulp-autoprefixer'),
	imgMin = require('gulp-imagemin'),
	browserSync = require('browser-sync'),
	gulpif = require('gulp-if'),
	uglify = require('gulp-uglify'),
	babel = require('gulp-babel'),
	uncss = require('gulp-uncss');


// sass compilation
gulp.task('sass', function() {
	return gulp.src('./sass/**/*.scss')
		.pipe(sourceMaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) //compressed
		.pipe(autoPrefixer({browsers: ['last 2 versions']}))
		.pipe(sourceMaps.write('./maps'))
		.pipe(gulp.dest('../assets/css'))
		.pipe(browserSync.stream());
});

// run after all finished tu delete unused css
gulp.task('uncss', function() {
	return gulp.src('./sass/**/*.scss')
		.pipe(sourceMaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(uncss({
			php: ['../*.php']
		}))
		.pipe(autoPrefixer({browsers: ['last 2 versions']}))
		.pipe(sourceMaps.write('./maps'))
		.pipe(gulp.dest('../assets/css'))
		.pipe(browserSync.stream());
});

// copying files and uglify js 
gulp.task('copy', function() {
	return gulp.src('./**/*.php')
	//	.pipe(gulpif('*.js', sourceMaps.init()))
	//	.pipe(gulpif('*.js', babel({presets: ['es2015']})))
	//	.pipe(gulpif('*.js', uglify()))
	//	.pipe(gulpif('*.js', sourceMaps.write('.')))
	//	.pipe(gulpif('*.js', gulp.dest('../assets/')))
		.pipe(gulpif('*.php', gulp.dest('../')))
		.pipe(browserSync.stream());
});

// images optimalisation
gulp.task('images', function() {
	return gulp.src('./img/*.*')
		.pipe(imgMin())
		.pipe(gulp.dest('../assets/img'));
});

// browser-sync
gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: 'http://localhost/WP-4_8_1/'
	});
});

// watch for files
gulp.task('watch', ['browser-sync', 'sass'], function() {
	gulp.watch('./sass/**/*.scss', ['sass']);
	gulp.watch('**/*.php', ['copy']);
});

// gulp default task
gulp.task('default', ['watch']);






