/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        /** Sass task */
        
        sass: {
            dev: {
                options:  {
                   style: 'expanded',
                   sourcemap: 'none',
                },
                files: {
                    'compiled/style.css': 'sass/style.scss'
                }
            },
            dist: {
                options:  {
                   style: 'compressed',
                   sourcemap: 'none',
                },
                files: {
                    'compiled/style-min.css': 'sass/style.scss'
                }
            }
        },
        
        /** Autoprefixer **/
        
        autoprefixer: {
            options: {
                browsers: ['last 2 versions']
            },
            // prefix all files
            multiple_files: {
                expand: true,
                flatten: true,
                src: 'compiled/*.css',
                dest: ''
            }
        },
        
        /** Watch task */
        
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass','autoprefixer']
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.registerTask('default',['watch']);
};