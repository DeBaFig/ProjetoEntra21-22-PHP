<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicione um anúncio!') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div>
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <form action="#" method="POST">
                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3">
                                                <x-input-label for="titulo" :value="__('Titulo')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" />
                                                <x-input-label for="titulo" :value="__('Link de referencia')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" />
                                                <x-input-label for="titulo" :value="__('Endereço')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" />
                                            </div>
                                        </div>
                                        <div>
                                            <x-input-label for="titulo" :value="__('Descrição:')" />
                                            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" />
                                        </div>
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Valor justo:')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="number" name="titulo" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Paga no Máx:')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="number" name="titulo" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Quantidade:')" />
                                                <x-text-input id="titulo" class="block mt-1 w-full" type="number" name="titulo" />
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-10">
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Negocia?')" />
                                                <x-text-input id="titulo" class="block mt-1 " type="checkbox" name="titulo" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Somente novo?')" />
                                                <x-text-input id="titulo" class="block mt-1 " type="checkbox" name="titulo" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="titulo" :value="__('Ativar')" />
                                                <x-text-input id="titulo" class="block mt-1 " type="radio" name="titulo" />
                                                <x-input-label for="titulo" :value="__('Rascunho')" />
                                                <x-text-input id="titulo" class="block mt-1 " type="radio" name="titulo" />
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Fotos do item:</label>
                                            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                            <span>Adicione uma foto</span>
                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                        </label>
                                                        <p class="pl-1">ou arraste aqui!</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF até 10MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>