const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concatCSS = require('gulp-concat-css');
const ftp = require('vinyl-ftp');
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
		.pipe(concatCSS('index.css'))
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
	gulp.watch('src/*.php').on('change', () => {
		browserSync.reload();
		done();
	});
	gulp.watch('src/js/*.js').on('change', () => {
		browserSync.reload();
		done();
	});
	done();
}
function watchSass(done) {
	browserSync.init({
		server: 'src/',
	});
	gulp.watch('src/sass/*.sass', style);
	gulp.watch('src/js/*.js').on('change', () => {
		browserSync.reload();
		done();
	});
	done();
}
// FTP
function server(done) {
	const conn = ftp.create({
		host: '31.31.196.94',
		user: 'u1049543',
		password: '5TXh4_TA',
		parallel: 10,
		log: gutil.log,
	});
	const globs = ['src/**'];
	gulp
		.src(globs, { base: './src/', buffer: false })
		.pipe(conn.newer('/www/antiseptic-tmn.ru/')) // only upload newer files
		.pipe(conn.dest('/www/antiseptic-tmn.ru/'));
	done();
}

exports.default = gulp.series(watch, style);
exports.sass = gulp.series(watchSass, style);
exports.serv = server;

//host: '136.243.147.150'
//user: 'eazy1108',
//password: 'gYwR07MW5X',
