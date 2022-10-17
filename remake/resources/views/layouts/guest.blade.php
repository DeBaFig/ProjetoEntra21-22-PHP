<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}">
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/detalhes.css') }}">
</head>

<body>
  @include('layouts.navigation_guest')

  <div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
  </div>

  <footer class="text-gray-600 body-font bg-lime-200">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-400 rounded-full" viewBox="0 0 24 24">
            <path d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
          </svg>
          <span class="ml-3 text-xl">Balcão Brasil</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">Desde 2022, agradando a clientela!</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIAS</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800" href="{{ route('home') }}">Página Inicial</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800" href="{{ route('sobre') }}">Sobre Nós</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800" href="{{ route('sobre-balcao') }}">Sobre o Balcão Brasil</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800" href="{{ route('contato') }}">Entre em contato conosco!</a>
            </li>
          </nav>
        </div>
  </footer>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <script src="detalhes.js"></script>

</body>

</html>