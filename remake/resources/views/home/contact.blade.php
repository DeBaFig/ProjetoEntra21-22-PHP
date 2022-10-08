<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contato') }}
        </h2>
    </x-slot>

    <div class="py-12 text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg">
                <div class="p-6 bg-white md:w-1 xl:w-1/2 p-6 " style="margin:0 auto;">
                    <img src="{{ asset('assets/img/contato.png') }}" width="600px">
                    <form class="mt-8 space-y-6" method="POST" action="https://formsubmit.co/balcao.brasil.adm@gmail.com">
                        @csrf
                        <input type="hidden" name="_next" value="{{ url('contato/obrigado')}}" />
                        <input type="hidden" name="_autoresponse" value="Obrigada por entrar em contato!">

                        <div class="-space-y-px rounded-md">
                            @if(!empty($message))
                            <div class="text-black alert alert-success bg-success text-center">{{$message}}</div>
                            @endif
                            <div class="my-3">
                                <label for="nome" class="sr-only">Nome</label>
                                <input id="nome" name="nome" type="text" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu nome">
                            </div>
                            <div class="my-3">
                                <label for="email" class="sr-only">E-mail</label>
                                <input id="email" name="email" type="email" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Digite seu e-mail">

                            </div>
                            <div class="my-3">
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
        </div>
    </div>
</x-guest-layout>