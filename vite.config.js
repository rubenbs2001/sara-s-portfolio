import {
    defineConfig, loadEnv
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default ({mode}) => {
    process.env = {...process.env, ...loadEnv(mode, process.cwd())};

    return defineConfig({
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js'
                ],
                refresh: true,
            }),
            tailwindcss(),
        ],
        server: {
            cors: true,
        },
    });
}
