const {
    src,
    dest,
    watch
} = require("gulp");
const sass = require("gulp-sass");
const gulpPostcss = require('gulp-postcss');
const autoprefixer = require('gulp-autoprefixer')
const cssDeclarationSorter = require('css-declaration-sorter');
const mmq = require('gulp-merge-media-queries');

const compileSass = () =>
    src("asset/style.scss")
    .pipe(
        sass({
            outputStyle: "expanded"
        })
    )
    .pipe(gulpPostcss([cssDeclarationSorter({
        order: 'smacss'
    })]))
    .pipe(autoprefixer({

    }))
    .pipe(mmq({
        log: true
    }))

    .pipe(dest("asset"));

const watchSassFiles = () => watch("asset/style.scss", compileSass);

exports.default = watchSassFiles;