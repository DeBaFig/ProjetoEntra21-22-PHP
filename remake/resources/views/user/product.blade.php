<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( Auth::user()->name . ", aqui estão seus anúncios." ) }}
        </h2>
    </x-slot>

    <div class="p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-b border-gray-200">

                <div class="container flex items-center flex-wrap pt-4 pb-12">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @foreach($viewData as $key => $detalhes)
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col ">
                        <a href="{{ route('user.detalhes', ['id'=> $detalhes['product_id']] ) }}">
                            <img class="hover:grow hover:shadow-lg rounded-lg" src="{{ $detalhes['photo_url']??asset($detalhes['photo_image']) }}">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">{{ $detalhes['title'] }}</p>
                            </div>
                            <div class="flex flex-row justify-between">
                                <p class="pt-1 text-gray-900">Pago: R$ {{ $detalhes['max_price'] }}</p>
                                <div class="md:w-1/2  flex flex-row">
                                    @if($detalhes['isActive'] == 0)
                                    <div class="mx-2">
                                        <a href="#" data-bs-toggle="tooltip" title="Ativar">
                                            <img class="ml-2" src="{{ asset('assets/icon/lightbulb-regular.svg') }}" style="width: 30px;" data-bs-toggle="tooltip" title="Ativar!">
                                        </a>
                                    </div>
                                    @elseif($detalhes['isActive'] == 1)
                                    <div class="mx-2">
                                        <a href="#" data-bs-toggle="tooltip" title="Desativar">
                                            <img class="ml-2" src="{{ asset('assets/icon/lightbulb-solid.svg') }}" style="width: 30px;" data-bs-toggle="tooltip" title="Desativar!">
                                        </a>
                                    </div>
                                    @endif
                                    <div class="mx-2">
                                        <a href="#" data-bs-toggle="tooltip" title="Editar">
                                            <img class="ml-2" src="{{ asset('assets/icon/pen-to-square-solid.svg') }}" style="width: 30px;">
                                        </a>
                                    </div>
                                    <div class="mx-2">
                                        <a href="#" data-bs-toggle="tooltip" title="Excluir">
                                            <img class="ml-2" src="{{ asset('assets/icon/trash-solid.svg') }}" style="width: 30px;">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="my-8 px-9">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>