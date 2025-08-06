<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Amotti') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layouts.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #efeded;
    }

    p{
        font-family: 'Nunito', sans-serif;
    }
</style>

<body class="antialiased text-gray-900">
    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.scripts')
    @livewireScripts
</body>

</html>
