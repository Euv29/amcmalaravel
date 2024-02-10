<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>

    </style>
</head>

<body class="bg-gray-100">
  <header class=" shadow">
      <nav class="container mx-auto flex items-center justify-between py-4">
          <!-- Logotipo -->
          <a href="#" class="lg:block logo font-semibold text-xl pl-2">
            <img class="logo-header" src="/img/logo.png" alt="">
          </a>

          <!-- Menu de navegação -->
          <div class="navegator hide-mobile lg:flex lg:items-center lg:space-x-4">
              <a href="#" class="nav-link">Inicio</a>
              <a href="#" class="nav-link">Sobre</a>
              <a href="#" class="nav-link">Adote</a>
              <a href="#" class="nav-link">Notícias</a>
              <a href="#" class="nav-link">Contactos</a>
              <a href="#" class="nav-link">Repositório</a>
              <a href="#" class="btn btn-enter text-white  px-4 py-2 rounded-md">Entrar</a>
          </div>

          <!-- Ícone de menu para dispositivos móveis -->
          <div class="hide-desktop pr-2">
              <button id="menu-toggle"
                  class="text-gray-100 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                  </svg>
              </button>
          </div>
      </nav>
  </header>

  <!-- Menu móvel -->
  <div id="mobile-menu">
      <div class=" hide-desktop  menu-items">
          <button class="close-btn">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                  </path>
              </svg>
          </button>
          <a href="#" class="nav-link">Inicio</a>
          <a href="#" class="nav-link">Sobre</a>
          <a href="#" class="nav-link">Adote</a>
          <a href="#" class="nav-link">Notícias</a>
          <a href="#" class="nav-link">Contactos</a>
          <a href="#" class="nav-link">Repositório</a>
          <a href="#" class="btn btn-enter text-white  px-4 py-2 rounded-md">Entrar</a>
      </div>
  </div>

  <script>
      // JavaScript para controlar a exibição do menu móvel
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      const closeBtn = document.querySelector('.close-btn');

      menuToggle.addEventListener('click', () => {
          mobileMenu.style.display = 'block';
      });

      closeBtn.addEventListener('click', () => {
          mobileMenu.style.display = 'none';
      });
  </script>
</body>

</html>
