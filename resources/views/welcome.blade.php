<x-site-layout>
    @section('title', "Acceuil - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @push('stacked_seo')
        <meta name="keywords" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value }}">
        <meta name="description" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value }}">
    @endpush

    <div class="grid min-h-screen">
        <div class="row-span-full col-span-full top-0 left-0 min-h-screen flex w-full">
            <div class="hidden lg:block w-full"></div>
            <div class="-z-10 h-[100vh] lg:min-h-screen lg:h-[1080px] w-full rounded-bl-lg overflow-hidden lazy header-bg"
                 data-bgimg="/assets/images/home/hero-image.png">
            </div>
        </div>

        <div class="row-span-full col-span-full w-full top-0 left-0">
            <div class="max-w-7xl xl:max-w-8xl mx-auto px-8">
                <div class="pt-48 pb-16 flex flex-col items-center lg:items-start gap-6">
                    <div data-aos="fade-up" class="uppercase font-extrabold text-4xl lg:text-6xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                        La
                        <x-special-text>Technologie Simplifiée</x-special-text>
                        pour rendre votre maison plus intelligente.
                    </div>

                    <div data-aos="fade-up" data-aos-delay="600" data-aos-offset="0" >
                        <a class="btn btn-black px-14 font-bold bubble-animation" href="{{ route('site.products.index') }}">
                            {{ __("Voir tous les produits") }}
                        </a>
                    </div>
                </div>

                <div class="py-12">
                    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-6 lg:gap-12">
                        <div class="">
                            <x-home.header.card data-aos="fade-up" data-aos-delay="100" :title="$home_categories[0]?->name" href="{{ route('site.products.index') }}?category={{ $home_categories[0]?->slug }}">
                                <x-slot name="image">
                                    <img data-src="{{ $home_categories[0]?->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" class="w-48 lazy" alt="sécurité image">
                                </x-slot>

                                <x-slot name="description">
                                    {!! $home_categories[0]?->description !!}
                                </x-slot>

                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l14 0"></path>
                                        <path d="M15 16l4 -4"></path>
                                        <path d="M15 8l4 4"></path>
                                    </svg>
                                </x-slot>
                            </x-home.header.card>
                        </div>

                        <div class="">
                            <x-home.header.card data-aos="fade-up" data-aos-delay="200" :title="$home_categories[1]?->name" href="{{ route('site.products.index') }}?category={{ $home_categories[1]?->slug }}">
                                <x-slot name="image">
                                    <img data-src="{{ $home_categories[1]?->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" class="w-48 lazy" alt="sécurité image">
                                </x-slot>

                                <x-slot name="description">
                                    {!! $home_categories[1]?->description !!}
                                </x-slot>

                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l14 0"></path>
                                        <path d="M15 16l4 -4"></path>
                                        <path d="M15 8l4 4"></path>
                                    </svg>
                                </x-slot>
                            </x-home.header.card>
                        </div>

                        <div class="">
                            <div class="flex flex-col gap-6 lg:gap-8">
                                <div data-aos="fade-up" data-aos-delay="300" class="card py-4 px-6 shadow-[-7px_5px_18px_2px_rgba(0,0,0,0.12)] rounded-lg hover:cursor-pointer h-full">
                                    <a href="{{ route('site.products.index') }}?category={{ $home_categories[2]?->slug }}" class="h-full flex items-center justify-between gap-8">
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-3xl font-bold">{{ $home_categories[2]?->name }}</h3>
                                        </div>
                                        <div class="flex flex-col gap-4 items-end justify-end">
                                            <img data-src="{{ $home_categories[2]?->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" class="w-24 lazy" alt="sécurité image">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l14 0"></path>
                                                <path d="M15 16l4 -4"></path>
                                                <path d="M15 8l4 4"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>

                                <div data-aos="fade-up" data-aos-delay="300" class="card py-4 px-6 shadow-[-7px_5px_18px_2px_rgba(0,0,0,0.12)] rounded-lg hover:cursor-pointer h-full">
                                    <a href="{{ route('site.products.index') }}?category={{ $home_categories[3]?->slug }}" class="h-full flex items-center justify-between gap-8">
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-3xl font-bold">{{ $home_categories[3]?->name }}</h3>
                                        </div>
                                        <div class="flex flex-col gap-4 items-end justify-end">
                                            <img data-src="{{ $home_categories[3]?->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" class="w-24 lazy" alt="sécurité image">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l14 0"></path>
                                                <path d="M15 16l4 -4"></path>
                                                <path d="M15 8l4 4"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl xl:max-w-8xl mx-auto px-8 flex flex-col items-center py-10 space-y-10">
        <h1 data-aos="fade-up" class="text-4xl lg:text-5xl font-bold">{{ __("Our brands") }}</h1>
        <div data-aos="fade-up" class="w-full lg:grid-cols-4 gap-6 justify-items-center">
            <x-brands-carousel :brands="$brands" />
        </div>
        <a data-aos="fade-up" class="btn bg-black text-white px-12" href="{{ route('site.brands') }}">{{ __("Voir plus") }}</a>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center py-10 space-y-20">

        <div class="grid grid-cols-12 grid-rows-12 lg:grid-rows-1">
            <div data-aos="zoom-in-right" class="rounded-lg p-8 md:p-16 pt-28 md:pt-32 lg:pt-16 bg-[#FFEE75] col-span-full lg:col-[1_/_span_9] row-[4_/_span_9] lg:row-start-1 py-20">
                <div class="lg:w-[90%] flex flex-col items-start gap-6">
                    <h2 class="text-3xl lg:text-5xl font-bold leading-tight">Éclairage, Ombrage et Confort</h2>

                    <p>
                        Chez Dia Smart, nous comprenons que ces éléments sont essentiels pour créer une ambiance
                        harmonieuse dans votre maison. C'est pourquoi nous offrons des solutions intégrées pour
                        que votre maison soit parfaitement éclairée, confortable et à l'abri des regards...
                    </p>

                    <a href="{{ route('site.eclairage-ombrage-et-confort') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Lire plus...
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div data-aos="zoom-in-right" data-aos-delay="800" class="col-span-full lg:col-span-4 col-start-1 lg:col-start-9 row-[1_/_span_4] lg:row-[1_/_span_full] flex justify-center items-center">
                <img class="max-w-lg w-full rounded-lg lazy" data-src="/assets/images/home/service-1.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-12 grid-rows-12 lg:grid-rows-1">

            <div data-aos="zoom-in-left" class="rounded-lg p-8 md:p-16 pt-28 md:pt-32 lg:pt-16 col-span-full lg:col-[4_/_span_9] row-[4_/_span_9] lg:row-start-1 flex justify-end bg-[#FFD873] py-20">
                <div class="lg:w-[90%] flex flex-col items-start gap-6">
                    <h2 class="text-3xl lg:text-5xl font-bold leading-tight">Divertissement</h2>

                    <p>
                        Nous croyons que votre espace de vie devrait être un lieu où vous pouvez vous détendre,
                        vous divertir et profiter pleinement de vos loisirs. C'est pourquoi nous offrons des
                        solutions de divertissement intelligemment conçues pour répondre à tous vos besoins.
                    </p>

                    <a href="{{ route('site.divertissement') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Lire plus...
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div data-aos="zoom-in-left" data-aos-delay="800" class="col-[1_/_span_full] lg:col-[1_/_span_4] row-[1_/_span_4] lg:row-start-1 flex justify-center items-center">
                <img class="max-w-lg w-full rounded-lg lazy" data-src="/assets/images/home/service-2.png" alt="">
            </div>

        </div>

        <div class="grid grid-cols-12 grid-rows-12 lg:grid-rows-1">
            <div data-aos="zoom-in-right" class="rounded-lg p-8 md:p-16 pt-28 md:pt-32 lg:pt-16 bg-[#FFBF75] col-span-full lg:col-[1_/_span_9] row-[4_/_span_9] lg:row-start-1 py-20">
                <div class="lg:w-[90%] flex flex-col items-start gap-6">
                    <h2 class="text-3xl lg:text-5xl font-bold leading-tight">Sécurité & Contrôle d'Accès</h2>

                    <p>
                        La sécurité et le contrôle d'accès sont des éléments cruciaux de tout espace de vie intelligent.
                        Chez Dia Smart, nous mettons en place des solutions de pointe pour protéger votre maison et
                        offrir une tranquillité d'esprit inégalée.
                    </p>

                    <a href="{{ route('site.securite-et-controle-dacces') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Lire plus...
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div data-aos="zoom-in-right" data-aos-delay="800" class="col-span-full lg:col-span-4 col-start-1 lg:col-start-9 row-[1_/_span_4] lg:row-[1_/_span_full] flex justify-center items-center">
                <img class="max-w-lg w-full rounded-lg lazy" data-src="/assets/images/home/service-3.png" alt="">
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center">
        <a data-aos="fade-up" href="{{ route('site.products.index') }}" class="btn btn-black px-14 font-bold">{{ __("Voir tous les produits") }}</a>
    </div>

    <div data-aos="fade-up" class="shadow-topBottom py-10 my-20">
        <div class="max-w-6xl mx-auto flex flex-col items-center space-y-10">
            <h2 class="text-4xl lg:text-5xl font-bold">{{ __("Best selling") }}</h2>

            <x-alpine-carousel >
                @foreach($featured_products as $product)
                    <x-product-card :product="$product" class="w-80 snap-center" />
                @endforeach
            </x-alpine-carousel>

            <a class="btn bg-black text-white shadow-md px-12" href="{{ route('site.products.index') }}">
                {{ __("Voir plus") }}
            </a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center py-20">

        <div class="grid grid-cols-12 grid-rows-12 lg:grid-rows-1">
            <div class="col-[1_/_span_full] lg:col-[1_/_span_7] row-[1_/_span_8] lg:row-[1_/_span_full] flex justify-center items-center">
                <img data-aos="zoom-in-right" class="w-full rounded-lg lazy" data-src="/assets/images/home/service-4.png" alt="">
            </div>

            <div class="col-[1_/_span_full] lg:col-[7_/_span_6] row-[8_/_span_4] lg:row-[1_/_span_full] pl-8 flex items-center">
                <div class="flex flex-col items-center lg:items-start gap-6">
                    <h2 data-aos="zoom-in-right" class="uppercase text-3xl md:text-4xl md:w-[80%] lg:text-5xl text-center lg:text-left font-bold">
                        {{ __("Faites passer votre maison au niveau supérieur") }}
                    </h2>

                    <a data-aos="zoom-in-right" href="{{ route('site.contact') }}" class="btn btn-black rounded-full inline-flex items-center gap-4">
                        {{ __("Contacter un technicien") }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


</x-site-layout>
