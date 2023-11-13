import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    server: {
      hmr: {
        host: '0.0.0.0'
      },
      host: '0.0.0.0'
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
