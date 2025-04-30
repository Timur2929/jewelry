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
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
