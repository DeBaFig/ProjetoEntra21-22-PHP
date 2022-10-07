<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('product.save') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="titulo" :value="__('Titulo')" />

                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" />
            </div><div>
                <x-input-label for="desc" :value="__('desc')" />

                <x-text-input id="desc" class="block mt-1 w-full" type="text" name="descricao" />
            </div>
                <x-primary-button class="ml-4">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>