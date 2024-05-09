import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input:[
                "resources/js/app.js",
                "resources/assets/libs/tobii/css/tobii.min.css",
                "resources/assets/libs/mdi/font/css/materialdesignicons.min.css",
                "resources/assets/css/tailwind.min.css",
                "resources/assets/libs/tobii/js/tobii.min.js",
                "resources/assets/libs/feather-icons/feather.min.js",
                "resources/assets/js/plugins.init.js",
                "resources/assets/js/app.js",
            ],
            ssr: "resources/js/ssr.js",
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    ssr: {
        noExternal: ["vue", "@protonemedia/laravel-splade"]
    },
});