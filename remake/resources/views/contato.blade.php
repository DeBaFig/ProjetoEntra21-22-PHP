<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>

  <!--navbar ou div -->

  <div class="flex min-h-full items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">

      <form class="mt-8 space-y-6" method="POST" action="https://formspree.io/f/{form_id}">

        {{ csrf_field() }}

        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="nome" class="sr-only">Nome</label>
            <input id="nome" name="nome" type="text" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu nome">
          </div>
          <div>
            <label for="email" class="sr-only">Email</label>
            <input id="email" name="email" type="email" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu e-mail">
          </div>
          <div>
            <label for="mensagem" class="block text-sm font-medium text-gray-700">Mensagem</label>
            <div class="mt-1">
              <textarea id="mensagem" name="mensagem" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Digite aqui sua mensagem!"></textarea>
            </div>

          </div>
          <div class="py-6">
            <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" style="color: black; background-color: #a5f3fc;">
              Enviar
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>

</body>

</html>