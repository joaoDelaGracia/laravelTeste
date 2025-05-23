import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

export default {
    content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './resources/js/**/*.js',
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        },
      },
    },

    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        // tailwindcss(),
    ],
}

