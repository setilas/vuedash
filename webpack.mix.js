let mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/assets/js/')
  .sass('resources/sass/laraspace.scss', 'public/assets/css/')
  mix.js('resources/js/app.js', 'public/js').vue();
if (!mix.inProduction()) {
  mix.webpackConfig({
    devtool: 'source-map'
  }).sourceMaps()
} else {
  mix.version()
}