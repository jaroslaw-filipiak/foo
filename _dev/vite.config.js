import { resolve } from 'path';
import { defineConfig } from 'vite';
import autoprefixer from 'autoprefixer';
import inject from '@rollup/plugin-inject';

export default defineConfig({
  build: {
    outDir: '../assets',
    watch: {},
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
      },
      output: {
        entryFileNames: `js/scripts.js`,
        chunkFileNames: `js/scripts.js`,
        assetFileNames: `[name].[ext]`,
      },
    },
  },
  css: {
    postcss: {
      plugins: [autoprefixer()],
    },
  },
  plugins: [
    inject({
      $: 'jquery',
      jQuery: 'jquery',
    }),
  ],
});
