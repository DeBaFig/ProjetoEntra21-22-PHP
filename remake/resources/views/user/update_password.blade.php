<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('user.update.password') }}">
                        @csrf

                        <!-- Name -->
                        @foreach($viewData as $key => $detalhes)
                        <div>
                            <x-input-label for="new_password" :value="__('NOVA Senha')" />
                            <x-text-input id="new_password" class="block mt-1 w-full" type="password" name="new_password" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="new_password_confirmation" :value="__('Confirme a NOVA Senha')" />

                            <x-text-input id="new_password_confirmation" class="block mt-1 w-full" type="password" name="new_password_confirmation" required />
                        </div>
                        <br><br> Digite sua senha ATUAL para confirmar as alterações:<br><br>
                        <div>
                            <x-input-label for="password" :value="__('Senha ATUAL')" />
                            <x-text-input id="old_password" class="block mt-1 w-full" type="password" name="old_password" required />
                        </div>
                        @endforeach
                        <x-primary-button class="my-5">
                            {{ __('Atualizar') }}
                        </x-primary-button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>