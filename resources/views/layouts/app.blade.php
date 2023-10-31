<!DOCTYPE html>
<html lang="ea">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles
    @yield('styles')
</head>

<body>

    @yield('content')


    @livewireScripts
</body>

</html>
