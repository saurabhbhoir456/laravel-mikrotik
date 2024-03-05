import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'node_modules/bootstrap/scss/bootstrap.scss',
                'resources/assets/sass/app.scss',
                'node_modules/bootstrap/dist/js/bootstrap.js',
                'resources/assets/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
