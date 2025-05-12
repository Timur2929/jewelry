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
                'resources/css/gifts.css', 
                'resources/css/catalog2.css', 
                'resources/css/catalog3.css', 
                'resources/js/gifts.js', 
                'resources/js/about.js', 
                'resources/js/selected.js', 
                'resources/js/app.js', 
                'resources/css/catalog.css', 
                'resources/js/catalog2.js', 
                'resources/js/catalog3.js', 
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
