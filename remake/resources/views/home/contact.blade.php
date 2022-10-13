<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contato') }}
        </h2>
    </x-slot>
        <div class="py-0 text-center">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg p-6 md:w-1/2 lg:w-1/2 xl:w-1/2" style="margin:0 auto;">
                           <fieldset class="formulario">
                    <img src="{{ asset('assets/img/contato.png') }}" width="600px">
                    <form class="mt-8 space-y-6" method="POST" action="https://formsubmit.co/balcao.brasil.adm@gmail.com">
                        <input type="hidden" name="_next" value="{{ url('contato/obrigado')}}" />
                        <input type="hidden" name="_autoresponse" value="Obrigada por entrar em contato!">
                        {{ csrf_field() }}

                        <div class="-space-y-px rounded-md">
                            @if(!empty($message))
                            <div class="text-black alert alert-success bg-success text-center">{{$message}}</div>
                            @endif
                            <label for="nome" class="sr-only">Nome</label>
                            <input id="nome" name="nome" type="text" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 focus:border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:outline-none sm:text-sm" placeholder="Digite seu nome">
                        </div>
                        <div class="my-3">
                            <label for="email" class="sr-only">E-mail</label>
                            <input id="email" name="email" type="email" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 focus:border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:outline-none sm:text-sm" placeholder="Digite seu e-mail">

                        </div>
                        <div class="my-3">
                            <label for="mensagem" class="sr-only">Mensagem</label>
                            <div class="mt-1">
                                <textarea id="mensagem" name="mensage" rows="3" class="mt-1 block w-full appearance-none border-gray-300 rounded-none focus:border-gray-300 text-gray-900 placeholder-gray-500 shadow-sm sm:text-sm " placeholder="Digite aqui sua mensagem!"></textarea>
                                </label>
                            </div>

                        </div>
                        <div class="py-6">
                            <x-primary-button class="ml-3">
                                {{ __('Enviar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

</x-guest-layout>