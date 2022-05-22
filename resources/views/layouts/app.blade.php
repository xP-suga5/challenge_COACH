<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'お問い合わせシステム') }}</title>

  <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @livewireStyles

</head>

<body>
  <div class="container mx-auto px-4">
    {{ $slot }}
  </div>
  @livewireScripts
</body>

</html>