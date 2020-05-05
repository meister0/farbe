const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concatCSS = require('gulp-concat-css');
//const ftp = require('vinyl-ftp');
const gutil = require('gulp-util');

// Compile sass into CSS, auto-inject into browsers, auto-prefixes + concatination sass(css)'s files
function style(done) {
	gulp
		.src('src/sass/*.sass')
		.pipe(
			sass({
				errLogToConsole: true,
			})
		)
		.on('error', console.error.bind(console))
		.pipe(autoprefixer({ cascade: false }))
		.pipe(concatCSS('style.css'))
		.pipe(gulp.dest('src/css'))
		.pipe(browserSync.stream());
	done();
}

// Static Server + watching scss/html files
function watch(done) {
	browserSync.init({
		server: 'src/',
	});
	gulp.watch('src/sass/*.sass', style);
	gulp.watch('src/*.html').on('change', () => {
		browserSync.reload();
		done();
	});
	gulp.watch('src/js/*.js').on('change', () => {
		browserSync.reload();
		done();
	});
	done();
}
// FTP
/* function server(done) {
	const conn = ftp.create({
		host: '136.243.147.150',
		user: 'eazy1108',
		password: 'gYwR07MW5X',
		parallel: 10,
		log: gutil.log
	});
	const globs = ['src/**'];
	gulp
		.src(globs, { base: './src/', buffer: false })
		.pipe(conn.newer('/www/meister0.site/')) // only upload newer files
		.pipe(conn.dest('/www/meister0.site/'));
	done();
}
 */
exports.default = gulp.series(watch, style);
//exports.serv = server;
