/*------------------------------------*\
    ::Common Configuration
    ----------------------------------*
    ::version 2.0.9

    common configuration options
    typical for most projects
\*------------------------------------*/
var config = {
    site: {
        // client folder name
        client: 'academic_ascents',
        // project folder name
        proj:   'academic_ascents'
    },
    url: {
        // address of the home page
        root: 'http://localhost/sites/academic_ascents/academic_ascents'
    },
    sass: {
        // location to look for sass files - expects a relative path ending in "/"
        // uses globbing for sub directories and files
        src:    './wp-content/themes/academic_ascents/sass/',
        // destination for compiled css file - expects a relative path ending in "/"
        dest:   './wp-content/themes/academic_ascents/'
    },
    js: {
        // name of script to process (must not contain a "-" character)
        scripts: {
            // destination of files to process - can use globbing
            src: './wp-content/themes/academic_ascents/js/scripts-src/**/*.js',
            // destination of output file - expects path and filename
            dest: './wp-content/themes/academic_ascents/js/scripts.min.js'
        }
        // you can add additional script objects using the same format as the above object
        // each will be available for processing separately
        // (e.g. you can run gulp js-scripts for the above script)
    },
    svg: {
        // name of svg sprite to process (must not contain a "-" character)
        general: {
            // destination of files to process - can use globbing
            src: './wp-content/themes/academic_ascents/images/general-src/**/*.svg',
            // destination of output file - expects path and (optionally) a filename
            dest: './wp-content/themes/academic_ascents/images/general.sprite.svg'
        }
    },
    watch: {
        // files to watch - can accept a string or an array of strings
        src: './wp-content/themes/academic_ascents/**/*.{php,html}'
    },
    db: {
        // local database configuration
        local: {
            // database name
            name: 'l1_academicascents',
            // database user
            user: 'root',
            // database password
            pass: 'root',
            // database host
            host: 'localhost',
            // table prefix
            prefix: 'wp_',
            // destination for dumped backup files
            dumpDir: '.db/',
            // filename for dumped backup files
            dumpFile: 'db.sql'
        }
    }
};

/*------------------------------------*\
    ::Project Specific Configuration
    ----------------------------------*
    atypical configuration options
    applicable to this project only
\*------------------------------------*/
// egsample:
// config.someOptionName = {
//     someOptionProperty: 'Some Option Value'
// };

/*------------------------------------*\
    ::Object Export to for Gulp
\*------------------------------------*/
module.exports = config;
