<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contato') }}
        </h2>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg p-6 md:w-1/2 lg:w-1/2 xl:w-1/2" style="margin:0 auto;">


                <fieldset class="formulario">
                    <img src="{{ asset('assets/img/login.png') }}">
                    <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Digite seu e-mail" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Digite sua senha" autocomplete="current-password" />
                        </div>
                      
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="w-4 h-4 text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 " name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar Senha') }}</span>
                            </label>
                        </div>

                        <div class="link">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?')}}
                            </a>
                            @endif 
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 " href="{{ route('register') }}">
                                {{ __('Ainda não se cadastrou?') }}
                                       
                            </a>
                        </div>
                        <x-primary-button class="button">
                                {{ __('Entrar') }}
                            </x-primary-button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

</x-guest-layout>