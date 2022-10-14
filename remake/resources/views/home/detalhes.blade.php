<x-guest-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <section class="bg-white py-8">
                        @foreach($viewData as $product)
                        <!DOCTYPE html>
                        <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>{{ $product['title'] }}</title>
                                <link rel = "stylesheet" href = "{{ asset('assets/css/detalhes.css') }}">
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                            </head>
                                <body>
                                    <div class = "main-wrapper">
                                        <div class = "container">
                                            <div class = "product-div">
                                                <div class = "product-div-left">
                                                    <div class = "img-container">
                                                        <img src = "{{ $product['photo_image'] }}">
                                                    </div>
                                                </div>
                                                <div class = "product-div-right">
                                                    <span class = "product-name">{{ $product['title'] }}</span>
                                                    <span class = "product-price">Pago: R$ {{ number_format((float)($product['max_price'] / 100), 2, ',', '') }}</span>
                                                    <p class = "product-description">{{ $product['description'] }}</p>
                                                    <!-- <div class = "btn-groups">
                                                        <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>Falar com Comprador</button>
                                                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script src = "detalhes.js"></script>
                                </body>
                                </html>
                            @endforeach
                </section>
            </div>
        </div>
    </div>

</x-guest-layout>
