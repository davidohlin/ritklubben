+'use strict'

import gulp from 'gulp'
import plumber from 'gulp-plumber'
import rename from 'gulp-rename'
import browsersync from 'browser-sync'
import sourcemaps from 'gulp-sourcemaps'
import sass from 'gulp-sass'
import postcss from 'gulp-postcss'
import autoprefixer from 'autoprefixer'
import cssnano from 'cssnano'
import jshint from 'gulp-jshint'
import uglify from 'gulp-uglify'
import imagemin from 'gulp-imagemin'
import del from 'del'

// Paths
const paths = {
	css: {
		src: './assets/src/scss/',
		dist: './assets/dist/css/'
	},
	js: {
		src: './assets/src/js/',
		dist: './assets/dist/js/',
		jshintrc: './.jshintrc'
	},
	img: {
		src: './assets/src/img/',
		dist: './assets/dist/img/'
	},
	cache: {
		src: '../uploads/.cache/'
	},
	views: {
		src: './views/'
	}
}

// Build CSS
gulp.task('css:dist', () => {
	// PostCSS plugins
	const plugins = [
		autoprefixer({browsers: ['last 1 version']}),
		cssnano()
	]

	return gulp.src(`${paths.css.src}**/*.scss`)
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(postcss(plugins))
		.pipe(rename({suffix: '.min'}))
		.pipe(browsersync.stream())
		.pipe(sourcemaps.write())
		.pipe(plumber.stop())
		.pipe(gulp.dest(paths.css.dist))
})

// Build JS
gulp.task('js:dist', () => {
	return gulp.src(`${paths.js.src}**/*.js`)
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(jshint(paths.js.jshintrc))
		.pipe(jshint.reporter('jshint-stylish'))
		.pipe(uglify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.js.dist))
})

// Compress images
gulp.task('img:dist', () => {
	return gulp.src(`${paths.img.src}**/*.*`)
		.pipe(imagemin())
		.pipe(gulp.dest(paths.img.dist))
})

// Delete .cache for Bladerunner
// https://github.com/ekandreas/bladerunner#cache
gulp.task('delete-cache', () => {
	return del([`${paths.cache.src}*.*`])
})

// Browsersync
gulp.task('browsersync', () => {
	browsersync.init({
		proxy: 'ritklubben.test'
	})
})

// Browsersync reload
gulp.task('bs-reload', () => {
	browsersync.reload()
})

// Watch
gulp.task('watch', ['css:dist', 'js:dist', 'img:dist', 'delete-cache', 'browsersync'], () => {
	gulp.watch(`${paths.css.src}**/*.scss`, ['css:dist', 'bs-reload'])
	gulp.watch(`${paths.js.src}**/*.js`, ['js:dist', 'bs-reload'])
	gulp.watch(`${paths.img.src}**/*.*`, ['img:dist', 'bs-reload'])
	gulp.watch(`${paths.views.src}**/*.php`, ['delete-cache', 'bs-reload'])
})
