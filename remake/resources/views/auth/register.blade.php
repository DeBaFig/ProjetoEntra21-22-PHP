<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg p-6 md:w-1/2 lg:w-1/2 xl:w-1/2" style="margin:0 auto;">
                <fieldset class="formulario">
                    <img src="{{ asset('assets/img/cadastro.png') }}" width="600px">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required placeholder="Digite seu nome" autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('')" />

                            <x-text-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" placeholder="Digite seu e-mail" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Digite sua senha" autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirme sua senha" name="password_confirmation" required />
                        </div>

                        <!-- Termos de Uso -->
                        <div class="mt-4">
                            <label for="termos" class="inline-flex items-center">
                                <input type="checkbox" name="termos" required class="rounded border-gray-300">
                                <a class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" href="{{ route('termos') }}">
                                    <span class="ml-2 text-sm text-gray-600">Registrando você aceita nossos {{ __('Termos de
                    Uso') }}</span>
                                </a>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Já tem cadastro?') }}
                            </a>

                            <x-primary-button class="ml-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</x-guest-layout>