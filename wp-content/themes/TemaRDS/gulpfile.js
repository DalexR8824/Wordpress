var gulp = require('gulp')
var less = require('gulp-less');
var browserSync = require('browser-sync').create();

// Server dev
gulp.task('serve', function () {
	browserSync.init({
		server: {
			baseDir: './' //sirviendo ficheros
		}
	})
})

// Process css
gulp.task('less', function () {

	return gulp
		.src('./assets/less/rds.less')
		.pipe(less())
		.pipe(gulp.dest('./assets/css'))
		.pipe(browserSync.stream()) // refrescar navegador
})

// Watch changes
gulp.task('watch', function() {
	gulp.watch('./assets/less/rds.less', ['less'])
	gulp.watch('./*.html').on('change', browserSync.reload)  // ejecuta function cada vez que escuche cambios
})

gulp.task('default', ['watch', 'serve'])