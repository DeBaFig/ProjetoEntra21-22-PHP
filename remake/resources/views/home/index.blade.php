<x-guest-layout>
    <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
    <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
        <!-- <div class="p-6 bg-white border-b border-gray-200"> -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div>
            <a href="#anuncios"><img src="{{ asset('assets/img/Home.png') }}" class="w-full">
         </div>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

           
            @foreach($viewData as $key => $detalhes)

            <div id="anuncios" class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col ">
                <a href="/home/detalhes/{{$detalhes['id']}}">
                   <img class="hover:grow hover:shadow-lg rounded-lg" src="{{ $detalhes['photo_url']??$detalhes['photo_image'] }}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ $detalhes['title'] }}</p>
                    </div>
                    <div class="flex flex-row justify-between">
                        <p class="pt-1 text-gray-900">Pago: R$ {{ $detalhes['max_price'] }}</p>

                        @if($detalhes['isNegotiable'] == 1)
                        <img class="ml-2" src="{{ asset('assets/icon/comments-dollar-solid.svg') }}" style="width: 30px;" data-bs-toggle="tooltip" title="ACEITO NEGOCIAR!">
                        @endif
                        @if($detalhes['isNew'] == 1)
                        <img class="ml-2" src="{{ asset('assets/icon/star-solid.svg') }}" style="width: 30px;" data-bs-toggle="tooltip" title="COMPRO NOVO!">
                        @endif
                    </div>

                </a>
            </div>
            @endforeach
        </div>
        <div class="my-8 px-9">
            {{ $viewData->links() }}
        </div>
    </div>
    </div>
    </div>

</x-guest-layout>