<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Amotti') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@474&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
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
