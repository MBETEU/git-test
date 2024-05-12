<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blood Bank</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        [x-cloak] { display: none; }
    </style>
    @livewireStyles
</head>

<body>
    <div class="container mx-auto px-4">
        @include('partials.navbar')
        {{-- <livewire:flash></livewire:flash> --}}
        @yield('content')
    </div>
    @livewireScripts
</body>

</html>
