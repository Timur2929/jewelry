import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/Osnova.css', 
                'resources/css/selected.css',
                'resources/css/about.css', 
                'resources/js/about.js', 
                'resources/js/selected.js', 
                'resources/js/app.js', 
                'resources/css/catalog.css', 
                'resources/js/catalog.js', 
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
