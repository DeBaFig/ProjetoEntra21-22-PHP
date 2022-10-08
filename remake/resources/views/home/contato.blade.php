<!-- <!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head> -->
<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
      </a>
    </x-slot>

    <!-- <body> -->

    <!--navbar ou div -->

    <img src="{{ asset('assets/img/contato.png') }}" width="600px">
    <form class="mt-8 space-y-6" method="POST" action="https://formsubmit.co/balcao.brasil.adm@gmail.com">
      @csrf
      <input type="hidden" name="_next" value="http://127.0.0.1:8000/obrigado" />


      <div class="-space-y-px rounded-md shadow-sm">
        @if(!empty($message))
        <div class="text-black alert alert-success bg-success text-center">{{$message}}</div>
        @endif
        <div>
          <label for="nome" class="sr-only">Nome</label>
          <input id="nome" name="nome" type="text" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu nome">
        </div>
        <div>
          <label for="email" class="sr-only">E-mail
            <input id="email" name="email" type="email" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu e-mail">
          </label>
        </div>
        <div>
          <label for="mensagem" class="sr-only">Mensagem</label>
          <div class="mt-1">
            <textarea id="mensagem" name="mensage" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Digite aqui sua mensagem!"></textarea>
            </label>
          </div>

        </div>
        <div class="py-6">

          <x-primary-button class="ml-3">
            {{ __('Enviar') }}
          </x-primary-button>

        </div>
      </div>
    </form>

    </div>
    </div>

    <!-- </body> -->
    <!-- 
</html> -->
  </x-auth-card>
</x-guest-layout>