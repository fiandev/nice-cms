import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    root: "./",
    plugins: [
        laravel({
            input: ["./resources/styles/base.css", "./resources/js/app.js"],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
    ],
});
