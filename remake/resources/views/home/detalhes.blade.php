<x-guest-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <section class="bg-white py-8">

                    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                            </div>
                        </nav>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col "> 
                        @foreach($viewData as $product)
                 
                                <div class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">
                                    <p class="pt-1 text-gray-900">{{ $product['title'] }}</p>
                                </div>

                                <img class="w3-border w3-padding" src="{{ $product['photo_image'] }}">

                                <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col ">
                                        <img class="hover:grow hover:shadow-lg rounded-lg" src="{{ $product['photo_image'] }}">
                                </div>   

        
                                <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">{{ $product['address'] }}</p>
                                </div>

                                <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">{{ $product['description'] }}</p>
                                </div>
                                    
                                <div class="flex flex-row justify-between">
                                        <p class="pt-1 text-gray-900">Pago: R$ {{ number_format((float)($product['max_price'] / 100), 2, ',', '') }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-guest-layout>