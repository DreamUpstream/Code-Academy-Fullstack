const mix = require('laravel-mix');

mix.setPublicPath('public');

// mix.version();

// if (mix.inProduction()) {
// 	mix.sourceMaps();
// }

mix.sass('src/app.scss', 'public/css/app.css');