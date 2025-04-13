import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],  // Input CSS and JS files
      refresh: true,  // Enable automatic page refresh on file changes
    }),
  ],
})
