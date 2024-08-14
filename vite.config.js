import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                    //Css
                    'resources/sass/app.scss',

                    //Js
                    'resources/js/app.js'

                    ],
            refresh: true,
        }),
    ],
});
