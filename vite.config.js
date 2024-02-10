// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  // Seu ponto de entrada principal
  // Você pode ajustar este caminho de acordo com a estrutura do seu projeto
  // Por exemplo, se seu arquivo principal estiver em 'resources/js/app.js', você pode usar 'resources/js/app.js' aqui
  root: './resources/js',

  // Arquivos a serem pré-bundled, se necessário
  optimizeDeps: {
    include: [
      'vue', // Exemplo: incluir Vue.js
      '@tailwindcss/forms', // Exemplo: incluir @tailwindcss/forms
      // Adicione outros módulos conforme necessário
    ],
  },
});
