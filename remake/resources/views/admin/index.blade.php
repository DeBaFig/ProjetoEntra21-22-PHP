<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Administrador
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="w-full px-6 py-6 mx-auto">
                        <div class="flex flex-wrap -mx-3">
                            <x-card-admin>
                                <x-slot name="title">
                                    Usuários Ativos
                                </x-slot>
                                {{ ('AQUI VAI A VARIÁVEL') }}
                                <x-slot name="icon">
                                    {{ asset('assets/icon/user-solid.svg') }}
                                </x-slot>
                            </x-card-admin>
                            <x-card-admin>
                                <x-slot name="title">
                                    Anúncios Ativos
                                </x-slot>
                                {{ ('AQUI VAI A VARIÁVEL') }}
                                <x-slot name="icon">
                                    {{ asset('assets/icon/user-solid.svg') }}
                                </x-slot>
                            </x-card-admin>
                            <x-card-admin>
                                <x-slot name="title">
                                    Total de comentários
                                </x-slot>
                                {{ ('AQUI VAI A VARIÁVEL') }}
                                <x-slot name="icon">
                                    {{ asset('assets/icon/user-solid.svg') }}
                                </x-slot>
                            </x-card-admin>
                            <x-card-admin>
                                <x-slot name="title">
                                    Total de Visitantes
                                </x-slot>
                                {{ ('AQUI VAI A VARIÁVEL') }}
                                <x-slot name="icon">
                                    {{ asset('assets/icon/user-solid.svg') }}
                                </x-slot>
                            </x-card-admin>

                        </div>

                    </div>
                    <div class="flex flex-wrap mt-6 -mx-3 justify-between">
                        <x-card-admin-link>
                            <x-slot name="title">
                                Gerenciar Usuários
                            </x-slot>
                            {{ ('AQUI VAI A VARIÁVEL') }}
                            <x-slot name="link">
                                {{ ('clique aqui') }}
                            </x-slot>
                        </x-card-admin-link>
                        <x-card-admin-link>
                            <x-slot name="title">
                                Adicionar novos Administradores
                            </x-slot>
                            {{ ('AQUI VAI A VARIÁVEL') }}
                            <x-slot name="link">
                                {{ ('clique aqui') }}
                            </x-slot>
                        </x-card-admin-link>
                        <x-card-admin-link>
                            <x-slot name="title">
                                Gerenciar Anúncios
                            </x-slot>
                            {{ ('AQUI VAI A VARIÁVEL') }}
                            <x-slot name="link">
                                {{ ('clique aqui') }}
                            </x-slot>
                        </x-card-admin-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>