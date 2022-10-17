<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  @include('layouts.sections.styles')


</head>

<body>
  @include('layouts.navigation_guest')

  <div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
  </div>

  @include('layouts.sections.footer')
  @include('layouts.sections.scripts')

 
</body>

</html>