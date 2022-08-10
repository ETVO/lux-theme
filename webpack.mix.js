// webpack.mix.js

let mix = require('laravel-mix');

mix.disableSuccessNotifications();

// Compile
mix.js('assets/src/js/main.js', 'js')
.js('assets/src/js/admin.js', 'js')
.sass('assets/src/scss/main.scss', 'css')
.sass('assets/src/scss/admin.scss', 'css')
.sass('assets/src/scss/bootstrap.scss', 'css')
.sass('assets/src/scss/mktmedico.scss', 'css')
.setPublicPath('assets/public');

// Copy bootstrap-icons module
mix.copy('node_modules/bootstrap-icons/font/', 'assets/fonts/bootstrap-icons');