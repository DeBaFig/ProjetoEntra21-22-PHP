<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>{{ config('app.name', 'Balcão Brasil') }}</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" href="{{ asset('assets/layouts/img/brand/brand_256x256.jpg') }}">

  @include('layouts/sections/styles')

</head>

<body>
  @yield('layoutContent')


  @include('layouts/sections/scripts')

</body>

</html>
