<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( Auth::user()->name  ) }}
        </h2>
    </x-slot>
    <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <section class="bg-white py-8">
                    @foreach($viewData as $product)
                    <div class="product-div">
                        <div class="product-div-left">
                            <div class="img-container">
                                <img src="{{ asset($product['photo_image']) }}">
                            </div>
                        </div>
                        <div class="product-div-right">
                            <span class="product-name">{{ $product['title'] }}</span>
                            <span class="product-price">Pago: R$ {{ number_format((float)($product['max_price'] / 100), 2, ',', '') }}</span>
                            <p class="product-description">Localizção: {{ $product['address'] }}</p>
                            <p class="product-description">{{ $product['description'] }}</p>

                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>

</x-app-layout>