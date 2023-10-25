<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    @livewireStyles

    @wireUiScripts
    {{-- app.js should always be after wireUiScripts because it contains alpinejs and is required to be after it--}}
    @vite('resources/js/app.js')
</head>
<body>
    <x-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>
</html>