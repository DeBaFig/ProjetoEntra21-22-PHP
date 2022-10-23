<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Anúncio') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div>
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            @foreach($viewData as $detalhes)
                            <form action="{{ route('user.update.product', ['id'=> $detalhes['id']] )}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3">
                                                <x-input-label for="title" :value="__('Título')" />
                                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required="true" value="{{ $detalhes['title'] }}" />
                                                <x-input-label for="reference_link" :value="__('Link de referência')" />
                                                <x-text-input id="reference_link" class="block mt-1 w-full" type="url" name="reference_link" value="{{ $detalhes['reference_link'] }}" />
                                                @foreach($photoData as $photo)
                                                <x-input-label for="photo_url" :value="__('URL imagem - Referência')" />
                                                <x-text-input id="photo_url" class="block mt-1 w-full" type="url" name="photo_url" value="{{ $photo['photo_url'] }}" />
                                                @endforeach
                                                <x-input-label for="address" :value="__('Endereço')" />
                                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $detalhes['address'] }}" />
                                            </div>
                                        </div>
                                        <div>
                                            <x-input-label for="description" :value="__('Descrição:')" />
                                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $detalhes['description'] }}" />
                                        </div>
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-1">
                                                <x-input-label for="min_price" :value="__('Valor justo:')" />
                                                <x-text-input id="min_price" class="block mt-1 w-full" value="{{ $detalhes['min_price'] }}" min="0" type="number" name="min_price" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="max_price" :value="__('Paga no Máx:')" />
                                                <x-text-input id="max_price" class="block mt-1 w-full" value="{{ $detalhes['max_price'] }}" min="0" type="number" name="max_price" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="quantity" :value="__('Quantidade:')" />
                                                <x-text-input id="quantity" class="block mt-1 w-full" value="{{ $detalhes['quantity'] }}" type="number" name="quantity" value="1" />
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-10">
                                            <div class="col-span-1">
                                                <x-input-label for="isNew" :value="__('Somente novo?')" />
                                                <x-text-input id="isNew" class="block mt-1 border-solid border-2 border-gray-300 " type="checkbox" name="isNew" value="1" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="isNegotiable" :value="__('Negocia?')" />
                                                <x-text-input id="isNegotiable" class="block mt-1 border-solid border-2 border-gray-300 " type="checkbox" name="isNegotiable" value="1" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="activate" :value="__('Ativar')" />
                                                <x-text-input id="activate" class="block mt-1 border-solid border-2 border-gray-300 " checked type="radio" name="isActive" value="1" />
                                                <x-input-label for="draft" :value="__('Rascunho')" />
                                                <x-text-input id="draft" class="block mt-1 border-solid border-2 border-gray-300 " type="radio" name="isActive" value="0" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="grid grid-cols-1 gap-6">
                                        <x-input-label for="inputImage" :value="__('Imagem de Referência *Não implementado*')" />
                                        <x-text-input id="inputImage" class="block mt-1 w-full" type="file" placeholder="https://exemplo.com" disabled multiple name="images[]" />
                                    </div>

                                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Salvar</button>
                                    </div>
                                </div>
                                @endforeach
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>