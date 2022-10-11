<x-guest-layout>
    <x-auth-card>
            <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <fieldset class="formulario">
        <div class="py-12 text-center">
            <div class="max-w-7xl mx-auto sm:px-6">
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class=" bg-white">
                        <h1> E-mail enviado com sucesso! </h1> <br>
                        <p1>O quanto antes estaremos dando um retono!</p> <br>
                            <p>Volte sempre,</p> <br>
                            <p>Equipe Balcão Brasil,</p> <br>
                            <p> "Onde o vendendor me enconta!" </p><br>
                            <x-primary-button class="my-5">
                                <a href="{{ route('home')}}">{{ __('Voltar') }}</a>
                            </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </x-auth-card>

</x-guest-layout>