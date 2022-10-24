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
                            <form action="{{ route('user.store.product')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3">
                                                <x-text-input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                                <x-input-label for="title" :value="__('Titulo')" />
                                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required="true" />
                                                <x-input-label for="reference_link" :value="__('Link de referência')" />
                                                <x-text-input id="reference_link" class="block mt-1 w-full" type="url" name="reference_link" />
                                                <x-input-label for="photo_url" :value="__('URL imagem - Referência')" />
                                                <x-text-input id="photo_url" class="block mt-1 w-full" type="url" name="photo_url" />
                                                <x-input-label for="address" :value="__('Endereço')" />
                                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" />


                                            </div>
                                        </div>
                                        <div>
                                            <x-input-label for="description" :value="__('Descrição:')" />
                                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" />
                                        </div>
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-1">
                                                <x-input-label for="min_price" :value="__('Valor justo:')" />
                                                <x-text-input id="min_price" class="block mt-1 w-full" min="0" type="number" name="min_price" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="max_price" :value="__('Paga no Máx:')" />
                                                <x-text-input id="max_price" class="block mt-1 w-full" min="0" type="number" name="max_price" />
                                            </div>
                                            <div class="col-span-1">
                                                <x-input-label for="quantity" :value="__('Quantidade:')" />
                                                <x-text-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" value="1" />
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
                                                <x-text-input id="activate" class="block mt-1 border-solid border-2 border-gray-300 " type="radio" name="isActive" value="1" />
                                                <x-input-label for="draft" :value="__('Rascunho')" />
                                                <x-text-input id="draft" class="block mt-1 border-solid border-2 border-gray-300 " type="radio" name="isActive" value="0" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="grid grid-cols-1 gap-6">
                                        <x-input-label for="inputImage" :value="__('Imagem de Referência *Não implementado*')" />
                                        <x-text-input id="inputImage" class="block mt-1 w-full" type="file" placeholder="https://exemplo.com" disabled multiple name="images[]" />
                                    </div>
                                    <x-primary-button class="m-5 p-3">
                                        {{ __('Salvar') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>