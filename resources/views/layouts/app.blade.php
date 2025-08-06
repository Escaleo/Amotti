<!DOCTYPE html>
<html lang="es">

<head>
    @include('partials.head')
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
