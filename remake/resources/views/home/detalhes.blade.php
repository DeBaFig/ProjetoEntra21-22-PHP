<x-guest-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <section class="bg-white py-8">
                    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                        <nav id="store" class="w-full z-30 top-0 px-6 py-1">

                                    <div id="image-container" class="col-md-6">
                                        <img src="{{ $product['photo_image'] }}" class="img-fluid">
                                     </div>

                                    <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">{{ $product['title'] }}</p>
                                    </div>

                                    <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">{{ $product['description'] }}</p>
                                    </div>
                                    
                                    <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">Pago: R$ {{ number_format((float)($product['max_price'] / 100), 2, ',', '') }}</p>
                                    </div>

                                </div>
                        </nav>

                </section>
            </div>
        </div>
    </div>

</x-guest-layout>