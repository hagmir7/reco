<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('app.name'))</title>
    @stack('stacked_seo')
    <link rel="canonical" href="{{ url()->current() }}" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.0/js/swiper.min.js"></script>


    {{-- @stack('stacked_styles')
    @vite('resources/css/app.css') --}}
    @livewireStyles

    @wireUiScripts
    {{-- app.js should always be after wireUiScripts because it contains alpinejs and is required to be after it--}}
    @vite('resources/js/app.js')
    @laravelPWA

    <style>
        * {
            font-family: 'ABCDiatype' !important;
        }


        .swiper-slide {
            box-sizing: border-box;
            width: 157px;
            height: 350px;
            /* transition: all;
                transition-duration: 100ms; */

        }

        .swiper-slide img {
            object-fit: cover;
        }




        .swiper-slide a {
            display: none;
            bottom: 10px;
            right: 35%;
        }

        .swiper-slide-active {
            height: 390px !important;
        }

        .swiper-slide-active a {
            display: block !important;
        }

        header {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }

        .four {
            background-image: url(./imgs/four.svg);
            background-repeat: no-repeat;
            background-position-x: 278px;
        }

        @media (max-width: 768px) {
            .swiper-wrapper {
                transform: inherit !important;
                display: inline-grid !important;
            }

            .swiper-slide {
                display: inline-block !important;
                width: 100% !important;
                height: auto;
            }

            .swiper-slide a {
                display: block !important;
                right: 30%;
            }
        }
    </style>
</head>

<body>
    {{-- <x-dialog /> --}}
    <x-header />

    @yield('content')
    <x-footer />

    @livewireScripts

    <script>
        var swiperEl = document.querySelector('.swiper-container');
        var mySwiper = new Swiper(swiperEl, {
            // Optional parameters
            slidesPerView: 2.5, // Show 1.5 slides
            centeredSlides: true, // Center the active slide
            spaceBetween: 20, // Adjust space between slides
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            initialSlide: 1, // Set the default active slide to the first slide

        });

        const swiper2 = document.querySelector('.swiper-container-2');
        const mySwiper2 = new Swiper(swiper2, {
            // Optional parameters
            slidesPerView: 2.5, // Show 1.5 slides
            centeredSlides: true, // Center the active slide
            spaceBetween: 20, // Adjust space between slides
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            initialSlide: 1, // Set the default active slide to the first slide
        });
    </script>

</body>

</html>
