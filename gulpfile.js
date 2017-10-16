/*
Task reference:

NAME |FUNCTION
==============
gulp          | Cleans folders, builds site and starts localhost
gulp prod     | Builds project to pub folder without localhost
gulp psi      | Builds then generates Google PSI reports
gulp ngrok    | Builds then sets up localhost tunnel to outside world
gulp report   | Runs further tests like accessibility checks
gulp favicon  | Creates major icons into _dev (setup in ./tasks)
gulp deploy   | Builds then deploys via FTP (setup in ftp task)

FLAGS
==============
--rev         | Add this to end one of above for versioned JS/CSS (eg. gulp --rev)
--optimise    | Further optimises project, toggle tasks at bottom
--phpext      | Replaces HTML file extentions with PHP, used for Couch CMS

*/


// Variables
// ============
// Define paths used within this gulp file

var paths = {
	tmp:       '.tmp',
	dev:       '_dev',
	pub:       '_prod'
};

// FTP dest folder
// ============
// For when using FTP task, check FTP task first

var ftpFolder = '/divorceandwellbeing-news';


// Reqs
// ============
// Require definitions and auto plugin require setup

var gulp     = require('gulp'),
	fs       = require('fs'),
	wiredep  = require('wiredep').stream,
	argv     = require('yargs').argv,
	gulpsync = require('gulp-sync')(gulp),
	spawn    = require('child_process').spawn,
	plugins  = require('gulp-load-plugins')({
				pattern: ['*'],
				replaceString: /\bgulp[\-.]/,
				lazy: true,
				camelize: true});


// Error handling
// ============
// Error response for plumber

var onError = function (err) {
  plugins.util.beep();
  console.log(err);
};


// Clean
// ============
// Cleaning tasks for builds

gulp.task('clean:tmp', function (cb) {
	plugins.rimraf(paths.tmp+'/**/*', cb);
});
gulp.task('clean:pub', function (cb) {
	plugins.rimraf(paths.pub+'/**/*', cb);
});
gulp.task('clean:html', function (cb) {
	plugins.rimraf(paths.tmp+'/*.html', cb);
});


// Inject deps
// ============
// Inject SASS and JS components

gulp.task('inject-deps', function() {
	// Auto inject SASS
	gulp.src(paths.dev+'/style/style.scss')
	.pipe(plugins.inject(gulp.src('components/**/*.scss', {read: false, cwd:paths.dev+'/style/'}), {
		relative: true,
		starttag: '/* inject:imports */',
		endtag: '/* endinject */',
		transform: function (filepath) {
			return '@import "' + filepath + '";';
		}
	}))
	.pipe(gulp.dest(paths.dev+'/style'));
	// Auto inject JS
	gulp.src(paths.dev+'/html/includes/_under.html')
	.pipe(plugins.inject(gulp.src('components/**/*.js', {read: false, cwd:paths.dev+'/script/'}), {
		relative: true,
		ignorePath: '../../',
		starttag: '<!-- inject:imports -->',
		endtag: '<!-- endinject -->',
		transform: function (filepath) {
			return '<script src="' + filepath + '"></script>';
		}
	}))
	.pipe(gulp.dest(paths.dev+'/html/includes/'));
});


// Bower
// ============
// Injects bower package JS/CSS from bower.json to project

gulp.task('bower', function () {
	// JS + CSS injection
	gulp.src(paths.tmp+'/*.html')
	.pipe(wiredep({
		devDependencies: true
	}))
	.pipe(gulp.dest(paths.tmp+'/'));
	// Image piping
	gulp.src(plugins.mainBowerFiles('**/*.{jpg,png,gif}',{includeDev:true}))
	.pipe(gulp.dest(paths.dev+'/img'));
	// Font piping
	gulp.src(plugins.mainBowerFiles('**/*.{ttf,eot,woff,woff2}',{includeDev:true}))
	.pipe(gulp.dest(paths.dev+'/font'));
});


// HTML
// ============
// HTML tasks such as compiling pug

gulp.task('html', function() {
	var output = '';
	// Handles Pug templates
	return gulp.src(paths.dev+'/html/*.pug')
	// Error handling
	.pipe(plugins.plumber({errorHandler: onError}))
	// Pug compilation
	.pipe(plugins.pug())
	.pipe(plugins.htmlPrettify())
	// HTML lint
	//.pipe(plugins.htmlhint())
    //.pipe(plugins.htmlhint.reporter())
	.pipe(gulp.dest(paths.tmp+'/'))
	.pipe(plugins.browserSync.stream());
});


// CSS
// ============
// Stylesheet tasks such as compliling and linting SASS

gulp.task('build-sass', function() {
	var output = '';
	plugins.del(['./reports/css/*']);
	return gulp.src(paths.dev+'/style/style.scss')
	// Error handling
	.pipe(plugins.plumber({errorHandler: onError}))
	// Sourcemap init
	.pipe(plugins.sourcemaps.init())
	// Compile SASS
	.pipe(plugins.sass().on('error', plugins.sass.logError))
	// Lint CSS
	.pipe(plugins.csslint({
		"adjoining-classes": false,"box-model": false,"box-sizing": false, "font-sizes": false,
        "duplicate-background-images": false,"ids": false,"order-alphabetical": false,
        "qualified-headings": false,"unique-headings": false,"universal-selector": false}))
	.pipe(plugins.csslint.formatter('text', {logger: function(str) { output += str; }}))
    .on('end', function(err) {fs.writeFile('reports/css/css.html', output);})
	// Write sourcemap
	.pipe(plugins.sourcemaps.write('./'))
	.pipe(gulp.dest(paths.tmp+'/style/'))
	// Browsersync inject stream
	.pipe(plugins.browserSync.stream());
});


// Usemin
// ============
// Usemin tasks for CSS and JS builds

gulp.task('usemin', function() {
	return gulp.src(paths.tmp+'/*.html')
	.pipe(plugins.foreach(function (stream, file) {
	return stream
		.pipe(plugins.plumber({errorHandler: onError}))
		.pipe(plugins.usemin({
		js:  [  plugins.sourcemaps.init(),
				// Uglify JS
			    plugins.uglify(),
				// Version if rev build
			    plugins.if(argv.rev,  plugins.rev()),
				// Write JS sourcemap
				plugins.sourcemaps.write('./')
		     ],
		css: [  // Minify CSS
				plugins.minifyCss(),
				// Version if rev build
			    plugins.if(argv.rev,  plugins.rev()),
				// CSS autoprefixer
			    plugins.autoprefixer({browsers: ['last 2 versions'],cascade: false}),
				// Fix paths for things like bower dependencies
				plugins.replace('url(images','url(img'),
		     ]
		}))
		.pipe(gulp.dest(paths.tmp+'/usemin'));
	}));
});




// Fontello
// ============
// Pulls glyphicons from font/config.json

gulp.task('fontello', function(done) {
	plugins.fontelloImport.getFont({
		host:   'http://fontello.com',
		config: paths.dev+'/font/config.json',
		font:   paths.dev+'/font/',
		css:    paths.dev+'/style/fontello',
	},done);
});


// Copy
// ============
// Moves assets over to prod from tmp

gulp.task('copy:scripts', function() {
	plugins.del(['./reports/js/*']);
	gulp.src(paths.dev+'/script/**/*')
	/*.pipe(plugins.jshint())
	.pipe(plugins.jshint.reporter('gulp-jshint-file-reporter', {
      filename: 'reports/js/js.html'
     }))*/
	.pipe(plugins.newer(paths.tmp+'/script'))
	.pipe(plugins.copy(paths.tmp,{prefix:1}))
	.pipe(plugins.browserSync.stream());
});
gulp.task('copy:fonts', function() {
	gulp.src(paths.dev+'/font/**/*')
	.pipe(plugins.copy(paths.tmp,{prefix:1}))
	.pipe(plugins.browserSync.stream());
	gulp.src(paths.dev+'/style/fontello/**.*')
	.pipe(plugins.copy(paths.tmp,{prefix:1}))
	.pipe(plugins.browserSync.stream());
});
gulp.task('copy:images', function() {
	gulp.src(paths.dev+'/img/**/*')
	.pipe(plugins.copy(paths.tmp,{prefix:1}))
	.pipe(plugins.browserSync.stream());
});
gulp.task('copy:pub', function() {
	// HTML
	gulp.src(paths.tmp+'/usemin/*.html')
	.pipe(plugins.copy(paths.pub,{prefix:2}));
	// CSS
	gulp.src(paths.tmp+'/usemin/style/**/*')
	.pipe(plugins.newer(paths.pub+'/'))
	.pipe(plugins.copy(paths.pub,{prefix:2}));
	// CSS MAP
	gulp.src(paths.tmp+'/style/**/*.map')
	.pipe(plugins.newer(paths.pub+'/'))
	.pipe(plugins.copy(paths.pub,{prefix:1}));
	// JS
	gulp.src(paths.tmp+'/usemin/script/**/*')
	.pipe(plugins.newer(paths.pub+'/'))
	.pipe(plugins.copy(paths.pub,{prefix:2}));
	// FONTS
	gulp.src(paths.tmp+'/font/**/*')
	.pipe(plugins.copy(paths.pub,{prefix:1}));
	// PHP
	gulp.src(paths.dev+'/script/**/*.php')
	.pipe(plugins.newer(paths.pub+'/'))
	.pipe(plugins.copy(paths.pub,{prefix:1}));
	// HUMANS
	gulp.src(paths.dev+'/humans.txt')
	.pipe(plugins.copy(paths.pub,{prefix:1}));
});


// Images
// ============
// Optimises imagery and copy assets

gulp.task('images', function() {
	return gulp.src(paths.tmp+'/img/**/*')
	// Error handling
	.pipe(plugins.plumber({errorHandler: onError}))
	.pipe(plugins.newer(paths.pub+'/img'))
	.pipe(plugins.imagemin({
		progressive: true
	}))
	.pipe(gulp.dest(paths.pub+'/img'));
});


// Server
// ============
// Fires up a local server to run the site

gulp.task('connect', function() {
	// Kills tab after close
	plugins.browserSync.use({
		/* jshint ignore:start */
		plugin() {},
		/* jshint ignore:end */
		hooks: {
		  'client:js': plugins.browserSyncCloseHook
		},
	});
	// Fires up browserSync
	plugins.browserSync.init({
		server: {
			baseDir: paths.tmp,
			routes: {
				"/bower_components": "bower_components"
			}
		}
   });
});


// Lint Reports
// ============
// Creates and opens lint report page

gulp.task('lint-reports', function () {
	gulp.src('./reports/index.html')
	.pipe(plugins.inject(gulp.src('./reports/css/css.html'), {
		relative: true,
		starttag: '<!-- inject:cssReport -->',
		transform: function (filePath, file) {
	    	return file.contents.toString('utf8');
	    }
	}))
	.pipe(plugins.inject(gulp.src('./reports/js/js.html'), {
		relative: true,
		starttag: '<!-- inject:jsReport -->',
		transform: function (filePath, file) {
	    	return file.contents.toString('utf8');
	    }
	}))
	.pipe(plugins.removeEmptyLines())
    .pipe(gulp.dest('./reports/'));
	try {
		var css = fs.statSync('./reports/css/css.html'),
			js  = fs.statSync('./reports/js/js.html');

		gulp.src('reports/index.html')
		.pipe(plugins.open({app: 'chrome'}));
	}
	catch(err) {
		console.log('No lints!');
	}
});


// ngrok
// ============
// Creates local server then a global tunnel through ngrok

var site      = '';
gulp.task('ngrok-server', function() {
plugins.connect.server({
    root:  paths.pub+'/',
	port: 3020,
    livereload: true
  });
});
gulp.task('ngrok-url', function(cb) {
  return plugins.ngrok.connect(3020, function (err, url) {
    site = url;
    console.log('serving your tunnel from: ' + site);
    cb();
  });
});


// PSI reports
// ============
// Google PSI reports for desktop and mobile, requires ngrok

gulp.task('psi-desktop', function (cb) {
  return plugins.psi.output(site, {nokey: 'true', strategy: 'desktop'});
});
gulp.task('psi-mobile', function (cb) {
  return plugins.psi.output(site, {nokey: 'true', strategy: 'mobile'});
});


// Gulp stop
// ============
// Stops any gulp processes

gulp.task('gulp-stop', function (cb) {
	process.exit();
});


// Deploy
// ============
// Deploys assets via FTP

gulp.task('ftpDeploy', function () {

	// Enter details into ftp-security.json (in the root of the framework folder)
	// and place one folder up outside of project to avoid deploying it
    var fs      = require('fs'),
		ftp     = JSON.parse(fs.readFileSync('../ftp-security.json')),
		conn    = plugins.vinylFtp.create( {
        host:     ftp.values.host,
        user:     ftp.values.user,
        password: ftp.values.password,
        parallel: 8,
        log:      plugins.util.log
    });
    return gulp.src(paths.pub+'/**', {base: paths.pub+'/', buffer: false })
	.pipe(conn.newer(ftpFolder))
    .pipe(conn.dest(ftpFolder));
});


// Favicons
// ============
// Creates a variety of favicons, setup first in 'tasks' folder

gulp.task('favicon', require('./tasks/favicon'));


// Accessibility
// ============
// Grades site to WCAG guidelines

gulp.task('accessibility', function() {
  return gulp.src(paths.pub+'/*.html')
    .pipe(plugins.accessibility({
      force: true
    }))
    .pipe(plugins.accessibility.report({reportType: 'txt'}))
    .pipe(plugins.rename({
      extname: '.html'
    }))
    .pipe(gulp.dest('reports/accessibility'));
});


// Critical CSS
// ============
// Adds index-critical.html with critical CSS

gulp.task('critical', function () {
	plugins.critical.generate({
        inline: true,
		base: paths.pub,
		src: 'index.html',
        dest:  paths.pub+'/index-critical.html',
        minify: true,
	    dimensions: [{width:320,height:480},{width:768,height:1024},{width:1280,height:960}]
	});
});


// Sprites
// ============
// Adds images to a spritemap and updates CSS links

gulp.task('sprites', function() {
    var spriteOutput;

    spriteOutput = gulp.src(paths.pub+"/style/*.css")
        .pipe(plugins.spriteGenerator({
			baseUrl:         "./",
			spriteSheetName: "sprite.png",
            spriteSheetPath: "/dist/image",
            styleSheetName:  paths.pub+"/img/"
        }));

	return function() {
		spriteOutput.css.pipe(gulp.dest(paths.pub+"/style/*.css"));
	    spriteOutput.img.pipe(gulp.dest(paths.pub+"/img/"));
	};
});


// Gzip
// ============
// Gzips files so server doesn't have to

gulp.task('gzip', function() {
	return gulp.src(paths.pub+'/**/*.{html,xml,json,css,js}')
	.pipe(plugins.if(argv.optim,  plugins.gzip()))
    .pipe(gulp.dest(paths.pub));
});


// Min-html
// ============
// Minifies HTML

gulp.task('htmlmin', function() {
	return gulp.src(paths.pub+'/**/*.html')
	.pipe(plugins.if(argv.optim,  plugins.htmlmin({collapseWhitespace: true, conservativeCollapse: true})))
    .pipe(gulp.dest(paths.pub));
});


// Uncss
// ============
// Scans HTML and removes unused CSS

gulp.task('uncss', function () {
	return gulp.src('site.css')
	.pipe(plugins.if(argv.optim,  plugins.uncss({html: [paths.pub+'/*.html']})))
	.pipe(gulp.dest(paths.pub));
});


// PHP ext
// ============
// Changes HTML ext to PHP

gulp.task('phpext', function() {
	return gulp.src(paths.pub+'/*.html')
	.pipe(plugins.vinylPaths(plugins.del))
	.pipe(plugins.rename(function (path) {
		path.extname = ".php"
	}))
	.pipe(gulp.dest(paths.pub));
});


// Couch assets
// ============
// Replaces with Couch CMS absolute path

gulp.task('couchIncludes', function() {
	return gulp.src(paths.pub+'/*.php')
   	.pipe(plugins.replace('href="style', 'href="<cms:show k_site_link />style'))
   	.pipe(plugins.replace('src="script', 'src="<cms:show k_site_link />script'))
   	.pipe(plugins.replace('href="img', 'href="<cms:show k_site_link />img'))
   	.pipe(plugins.replace('src="img', 'src="<cms:show k_site_link />img'))
	.pipe(plugins.replace('a href="', 'a href="<cms:show k_site_link />'))
	.pipe(plugins.replace('index.html', 'index.php'))
	.pipe(plugins.replace('about.html', 'about.php'))
	.pipe(plugins.replace('contact.html', 'contact.php'))
	.pipe(plugins.replace('news.html', 'news.php'))
	.pipe(plugins.replace('legal.html', 'legal.php'))
	.pipe(plugins.replace('who-we-are.html', 'who-we-are.php'))
	.pipe(plugins.replace('wellbeing.html', 'wellbeing.php'))
	.pipe(gulp.dest(paths.pub));
});
gulp.task('couchExcludes', function() {
	return gulp.src(paths.pub+'/*.php')
   	.pipe(plugins.replace('<a href="<cms:show k_site_link /><cms:show k_page_link />">', '<a href="<cms:show k_page_link />">'))
	.pipe(gulp.dest(paths.pub));
});


// Watch
// ============
// Perfom tasks based on file changes

gulp.task('watch', function(){
	// SASS
	plugins.watch([paths.dev+'/**/*.scss','!' + paths.dev+'/style/components/**/*.scss'], function () {gulp.start(gulpsync.sync([
		'watch:message','build-sass','lint-reports','clean:pub','build:pub'
	]));});
	// COMPONENTS
	plugins.watch(paths.dev+'/style/components/**/*.scss', function () {gulp.start(gulpsync.sync([
		'inject-deps'
	]));});
	// HTML
	plugins.watch(paths.dev+'/**/*.pug', function () {gulp.start(gulpsync.sync([
		'watch:message','clean:html','html','bower','clean:pub','build:pub'
	]));});
	// JS
	plugins.watch(paths.dev+'/**/*.js', function () {gulp.start(gulpsync.sync([
		'watch:message',['copy:scripts','inject-deps'],'lint-reports','clean:pub','build:pub'
	]));});
	// IMAGES
	plugins.watch(paths.dev+'/img/**/*.*', function () {gulp.start(gulpsync.sync([
		'watch:message','copy:images','clean:pub','build:pub'
	]));});
	// FONTELLO
	plugins.watch(paths.dev+'/font/config.json', function () {gulp.start(gulpsync.sync([
		'watch:message','fontello','copy:fonts','build-sass','lint-reports','clean:pub','build:pub'
	]));});
	// BOWER
	plugins.watch('bower_components/**/*', function () {gulp.start(gulpsync.sync([
		'watch:message','bower','clean:pub','build:pub'
	]));});
	// GULP
	plugins.watch('gulpfile.js', function () {gulp.start(gulpsync.sync([
		'watch:gulp'
	]));});
});
gulp.task('watch:message', function reload() {
	console.log('-* WATCH TRIGGERED *-');
});
gulp.task('watch:reload', function reload() {
	plugins.browserSync.reload();
	console.log('(Watching)');
});
gulp.task('watch:gulp', function() {
	process.exit();
});


// Tasks
// ============
// List of main gulp tasks

// BUILDS
gulp.task('build:tmp', gulpsync.sync([
	'clean:tmp',
	'fontello',
	'inject-deps',
	['copy:scripts','copy:fonts','copy:images'],
	'build-sass',
	['lint-reports','html'],
	'bower'
]));
gulp.task('build:pub', gulpsync.sync([
	'usemin',
	'copy:pub',
	'images',
	'couch',
	//'critical',
	'optimise'
]));

// OPTIMISING TASKS
gulp.task('optimise', gulpsync.sync([
	'sprites',
	'uncss',
	'htmlmin',
	'gzip'
]));

// TASKS
gulp.task('default', gulpsync.sync([
	'build:tmp',
	'connect',
	'watch',
	'clean:pub',
	'build:pub'
]), function() {console.log('(Watching)');
});
gulp.task('prod', gulpsync.sync([
	'build:tmp',
	'clean:pub',
	'build:pub'
]));
gulp.task('deploy', gulpsync.sync([
	'prod',
	'ftpDeploy'
]));
gulp.task('psi', gulpsync.sync([
	'prod',
	'ngrok-server',
	'ngrok-url',
	'psi-desktop',
	'psi-mobile',
	'gulp-stop'
]));
gulp.task('ngrok', gulpsync.sync([
	'prod',
	'ngrok-server',
	'ngrok-url'
]));
gulp.task('report', gulpsync.sync([
	'prod',
	'accessibility'
]));
gulp.task('couch', gulpsync.sync([
	'phpext',
	'couchIncludes',
	'couchExcludes'
]));
