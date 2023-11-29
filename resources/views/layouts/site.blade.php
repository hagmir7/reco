<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('app.name'))</title>
    @stack('stacked_seo')
    <link rel="canonical" href="{{ url()->current() }}"/>


    @stack('stacked_styles')
    @vite('resources/css/app.css')
    @livewireStyles

    @wireUiScripts
    {{-- app.js should always be after wireUiScripts because it contains alpinejs and is required to be after it--}}
    @vite('resources/js/app.js')
</head>
<body>
    <x-dialog />
    <x-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-footer/>

    @livewireScripts

    @stack('stacked_scripts')

    <script>
        window.markerConfig = {
            project: '6560d523d497b4b8f57f4ba0',
            source: 'snippet',

            // Identify your reporter
            reporter: {
                email: 'john@clientwebsite.com',
                fullName: 'John Smith',
            },

            // Collect custom information
            customData: {
                storeId: 123,
                storeName: 'Organic Fruits',
            },
        }
    </script>

    <script>
        !function(e,r,a){if(!e.__Marker){e.__Marker={};var t=[],n={__cs:t};["show","hide","isVisible","capture","cancelCapture","unload","reload","isExtensionInstalled","setReporter","setCustomData","on","off"].forEach(function(e){n[e]=function(){var r=Array.prototype.slice.call(arguments);r.unshift(e),t.push(r)}}),e.Marker=n;var s=r.createElement("script");s.async=1,s.src="https://localhost:1234/shim.js";var i=r.getElementsByTagName("script")[0];i.parentNode.insertBefore(s,i)}}(window,document);
    </script>

</body>
</html>
