@props(['errors'])

@if ($errors->any() || Session::has('error'))
<div {{ $attributes }}>
    <div class="font-medium text-red-600">
        @if(Session::has('error'))
        {{ session::get('error') }}
        @else
        {{ __('Whoops! Alguma coisa errada não está certa!') }}
        @endif
    </div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif