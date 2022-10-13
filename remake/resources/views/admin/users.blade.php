<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuários Ativos
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <div class="w-full mb-12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full shadow-lg rounded bg-white">
                            <div class="block w-full overflow-x-auto">
                                <div class="px-4 md:px-10 mx-auto w-full -m-17">
                                    <div class="flex flex-wrap mt-4">
                                        <table class="items-center w-full bg-transparent border-collapse">
                                            <thead>
                                                <tr>
                                                    <x-table-header>Nome</x-table-header>
                                                    <x-table-header>Status</x-table-header>
                                                    <x-table-header>Nº Anúncios</x-table-header>
                                                    <x-table-header>Último login</x-table-header>
                                                    <x-table-header><img class="w-6 h-6" src="{{ asset('assets/icon/eye-solid.svg')}}" data-bs-toggle="tooltip" title="VER"> </x-table-header>
                                                    <x-table-header><img class="w-6 h-6" src="{{ asset('assets/icon/pen-to-square-solid.svg')}}" data-bs-toggle="tooltip" title="EDITAR"> </x-table-header>
                                                    <x-table-header><img class="w-6 h-6" src="{{ asset('assets/icon/circle-exclamation-solid.svg')}}" data-bs-toggle="tooltip" title="ENVIAR AVISO"> </x-table-header>
                                                    <x-table-header><img class="w-6 h-6" src="{{ asset('assets/icon/trash-solid.svg')}}" data-bs-toggle="tooltip" title="EXCLUIR"> </x-table-header>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($viewData as $key => $detalhes)
                                                <tr>
                                                    <x-table-cell>{{ $detalhes['name'] }}</x-table-cell>
                                                    <x-table-cell>{{ $detalhes['isActive']? 'Sim': 'Não' }}</x-table-cell>
                                                    <x-table-cell>{{ $detalhes['product_count'] }}</x-table-cell>
                                                    <x-table-cell>{{ $detalhes['last_login'] }}</x-table-cell>
                                                    <x-table-icons>{{ $detalhes['id']  }}</x-table-icons>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="my-8 px-9">
                                        {{ $viewData->links() }}
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>