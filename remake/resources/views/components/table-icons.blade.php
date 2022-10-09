@php
$item_id = $slot 
@endphp
<x-table-cell>
    <a href="{{ route('admin.user.show', ['id'=> $item_id] ) }}" >
        <img class="w-6 h-6" src="{{ asset('assets/icon/eye-solid.svg')}}" data-bs-toggle="tooltip" title="EDITAR">
    </a>
</x-table-cell>
<x-table-cell>
    <a href="{{ route('admin.user.show', ['id'=> $item_id] ) }}">
        <img class="w-6 h-6" src="{{ asset('assets/icon/pen-to-square-solid.svg')}}" data-bs-toggle="tooltip" title="EDITAR">
    </a>
</x-table-cell>
<x-table-cell>
    <a href="{{ route('admin.user.show', ['id'=> $item_id] ) }}">
        <img class="w-6 h-6" src="{{ asset('assets/icon/circle-exclamation-solid.svg')}}" data-bs-toggle="tooltip" title="EDITAR">
    </a>
</x-table-cell>
<x-table-cell>
    <a href="{{ route('admin.user.show', ['id'=> $item_id] ) }}">
        <img class="w-6 h-6" src="{{ asset('assets/icon/trash-solid.svg')}}" data-bs-toggle="tooltip" title="EDITAR">
    </a>
</x-table-cell>