module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            // 2. Configuration for concatinating files goes here.
			dist: {
			  src: [
				  //'js/vendor/*.js', // All JS in the libs folder
				  'library/js/foundation.min.js',
				  //'library/js/foundation/foundation.js',
				  //'library/js/foundation/foundation.accordion.js',
				  //'library/js/foundation/foundation.interchange.js',
				  //'library/js/foundation/foundation.offcanvas.js',
				  //'library/js/foundation/foundation.orbit.js',
				  //'library/js/foundation/foundation.topbar.js',
				  //'library/js/foundation/foundation.equalizer.js',
				  'library/js/scripts.js'  // This specific file
			  ],
			  dest: 'library/js/build.js',
		  }
        },
		
		uglify: {
			build: {
				src: 'library/js/build.js',
				dest: 'library/js/build.min.js'
			}
		},
		
		watch: {
			options: {
				livereload: true,
			},
	
			scripts: {
				files: ['library/js/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},
			
			css: {
				files: ['library/scss/*.scss'],
				tasks: ['sass'],
				options: {
					spawn: false,
				}
			} 
		},
		
		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'library/css/build.css': 'library/scss/style.scss'
				}
			} 
		}

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'watch', 'sass']);

};
