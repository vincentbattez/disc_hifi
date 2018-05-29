module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt); //Charge les bons plugins
    grunt.initConfig({
///////
///JS//
///////
        //LINT
        jshint: {
            all: ['js/*.js', '!js/*min*.js']
        },
        //BEAUTIFER
        jsbeautifier: {
            src: ['js/*.js', '!js/*min*.js'],
            options: {
                js: {
                    indentSize: 4
                }
            }
        },
        //CONCAT JS  -------------------------A CHANGER src
        concat: {
            dist: {
                src:
                ['js/jquery-2.2.3.min.js',
                 'bootstrap.min.js',
                  'functions.js',
                   'script.js'
               ], //Fichier compressé
                dest: 'js/min.js' //vers...
            },
        },
        //MINIFY
        uglify: {
            my_target: {
                files: {
                    'js/min.js': ['js/min.js']
                }
            }
        },
///////
//CSS//
///////
        //Autoprefixer
        autoprefixer: {
            dist: {
                files: ['css/*.css', '!css/*min*.css'],
            },
        },
        //BEAUTIFER
        cssbeautifier: {
            files: ['css/*.css', '!css/*min*.css']
        },
        //MINIFY  -------------------------A CHANGER files
        cssmin: {
            target: {
                files: {
                    'css/min.css':
                    ['css/animate.css',
                     'css/font-awesome.css',
                     'css/bootstrap.min.css',
                     'css/style.css',
                     'css/style_jo.css'
                  ]
                }
            }
        }
    });


    grunt.registerTask('default', ['jsbeautifier', 'concat', 'uglify', 'cssbeautifier', 'cssmin']);
};
