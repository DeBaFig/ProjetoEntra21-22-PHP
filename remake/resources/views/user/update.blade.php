<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atualize seus dados!') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf

                        <!-- Name -->
                        @foreach($viewData as $key => $detalhes)
                        <div>
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $detalhes['name'] }}" />
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email - Não pode ser trocado')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $detalhes['email'] }}" disabled />
                            <x-text-input id="email" type="hidden" name="email" value="{{ $detalhes['email'] }}" />
                        </div>
                        <div>
                            <x-input-label for="cpf" :value="__('CPF')" />
                            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" value="{{ $detalhes['cpf'] }}" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Telefone (ddd-número)')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $detalhes['phone'] }}" />
                        </div>
                        <div>
                            <x-input-label for="address" :value="__('Endereço')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $detalhes['address'] }}" />
                        </div>
                        <div>
                            <x-input-label for="cep" :value="__('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" value="{{ $detalhes['cep'] }}" />
                        </div>
                        <br> ADICIONE SUAS REDES SOCIAIS PARA O VENDEDOR TE ENCONTRAR:<br>
                        <div>
                            <x-input-label for="facebook" :value="__('FACEBOOK')" />
                            <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" value="{{ $detalhes['facebook'] }}" />
                        </div>
                        <div>
                            <x-input-label for="instagram" :value="__('INSTAGRAM')" />
                            <x-text-input id="instagram" class="block mt-1 w-full" type="text" name="instagram" value="{{ $detalhes['instagram'] }}" />
                        </div>
                        <br><br> Digite sua senha para confirmar as alterações:<br><br>
                        <div>
                            <x-input-label for="password" :value="__('Senha')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
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