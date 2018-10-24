'use strict';

const gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourceMaps = require('gulp-sourcemaps'),
	autoPrefixer = require('gulp-autoprefixer'),
	imgMin = require('gulp-imagemin'),
	browserSync = require('browser-sync'),
	gulpif = require('gulp-if'),
	uglify = require('gulp-uglify'),
	babel = require('gulp-babel'),
	gulpIf = require('gulp-if'),
	del = require('del'),
	runSequence = require('run-sequence'),
	ftp = require('vinyl-ftp'); 
	require("babel-register");

// basic dirs in project
const dirs = {
	dev: '.',
	prod: './prod'
};

// paths to php files
const phpPaths = {
	dev: `${dirs.dev}/**/*.php`,
	prod: `${dirs.prod}/`,
	noToWatch: `!${dirs.prod}`,
	noToWatchSub: `!${dirs.prod}/**/*.*`
};

// paths to sass - css files
const cssPaths = {
	dev: `${dirs.dev}/sass/**/*.scss`,
	prod: `${dirs.prod}/assets/css`
}

// paths to js
const jsPaths = {
	dev: `${dirs.dev}/js/**/*.js`,
	prod: `${dirs.prod}/assets/js`
}

// paths to images
const imgPaths = {
	dev: `${dirs.dev}/img/**/*.*`,
	prod: `${dirs.prod}/assets/img`
}

const delPaths = {
	toDelete: `${dirs.prod}/**`,
	dontDelete: `!${dirs.prod}`
}

const dependencesFiles = [
	'./style.css',
	'./screenshot.png'
];

const ftpPaths = {
	prod: `${dirs.prod}/**`,
	baseProd: `${dirs.prod}`
}

// browser-sync
gulp.task('browser-sync', () => {
	browserSync.init({
		proxy: 'http://localhost/wordpress/'
	});
});

// copying php files
gulp.task('php', () => {
	return gulp.src([phpPaths.dev, phpPaths.noToWatch, phpPaths.noToWatchSub])
		.pipe(gulp.dest(phpPaths.prod))
		.pipe(browserSync.stream());
});


// sass compilation css
gulp.task('sass', () => {
	return gulp.src(cssPaths.dev)
		.pipe(sourceMaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoPrefixer({browsers: ['last 2 versions']}))
		.pipe(sourceMaps.write('./'))
		.pipe(gulp.dest(cssPaths.prod))
		.pipe(browserSync.stream());
});

// minify js files 
gulp.task('js', () => {
	return gulp.src(jsPaths.dev)
		.pipe(sourceMaps.init())
		.pipe(babel({
			presets: ['es2015']
		}))
		.pipe(uglify())
		.pipe(sourceMaps.write('./'))
		.pipe(gulp.dest(jsPaths.prod))
		.pipe(browserSync.stream());
});

// copy images
gulp.task('img', () => {
	return gulp.src(imgPaths.dev)
		.pipe(gulp.dest(imgPaths.prod));
});

// minif img files
gulp.task('img-min', () => {
	return gulp.src(imgPaths.dev)
		.pipe(imgMin())
		.pipe(gulp.dest(imgPaths.prod));
});

// clear prod folder
gulp.task('clear', () => {
	return del.sync([delPaths.toDelete, delPaths.dontDelete]);
});

// copy dependences to prod folder
gulp.task('dependences', () => {
	return gulp.src(dependencesFiles)
		.pipe(gulpIf('*.js', gulp.dest(jsPaths.prod)))
		.pipe(gulpIf('*.css', gulp.dest(cssPaths.prod)))
		.pipe(gulpIf('+(style.css|screenshot.png)', gulp.dest(dirs.prod)));
});

// auto deploy to serwer
import { ftpConfig as ftpConfig } from './ftp-config';
import { serverPath as serverPath } from './ftp-config';

gulp.task('upload-ftp', () => {

	let conn = ftp.create(
		ftpConfig
	);

	return gulp.src(ftpPaths.prod, { 
		base: ftpPaths.baseProd, 
		buffer: false
	})
	.pipe(conn.newer(serverPath))
	.pipe(conn.dest(serverPath));
});

// watch for files
gulp.task('watch', ['sass', 'browser-sync'], () => {
	gulp.watch(cssPaths.dev, ['sass']);
	gulp.watch([
		phpPaths.dev, 
		phpPaths.noToWatch, 
		phpPaths.noToWatchSub], ['php']);
	gulp.watch(jsPaths.dev, ['js']);
});

gulp.task('start-dev', () => {
	runSequence('clear', 'dependences', 'php', 'sass', 'js', 'img', 'watch');
});

// gulp for production
gulp.task('build', () => {
	runSequence('clear', 'dependences', 'php', 'sass', 'js', 'img-min', () => {
		console.log('Project build with succes');
	});
});

// gulp default task
gulp.task('default', ['start-dev']);






