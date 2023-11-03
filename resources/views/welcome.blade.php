<x-site-layout>
    <div class="grid min-h-screen">
        <div class="row-span-full col-span-full top-0 left-0 min-h-screen flex w-full">
            <div class="w-full"></div>
            <div class="min-h-screen h-[1080px] w-full rounded-bl-lg overflow-hidden" style="background-image: url('/assets/images/home/hero-image.png'); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
            </div>
        </div>

        <div class="row-span-full col-span-full w-full top-0 left-0">
            <div class="max-w-7xl xl:max-w-8xl mx-auto px-8">
                <div class="pt-48 pb-16 flex flex-col items-start gap-6">
                    <div class="uppercase font-extrabold text-5xl max-w-[475px] drop-shadow-md">
                        La Technologie Simplifiée pour rendre votre maison plus intelligente
                    </div>

                    <a class="btn btn-black px-14 font-bold" href="{{ route('site.products.index') }}">Voir tous les produits</a>
                </div>

                <div class="py-12">
                    <div class="max-w-5xl mx-auto grid grid-cols-3 gap-12">
                        <div class="">
                            <x-home.header.card title="Pack sécurité">
                                <x-slot name="image">
                                    <img src="/assets/images/home/hero-card-product-1.png" class="w-48" alt="Pack sécurité image">
                                </x-slot>

                                <x-slot name="description">
                                    Voir tous nos packs solutions en un coup d'œil.
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
                            <x-home.header.card title="Capteurs">
                                <x-slot name="image">
                                    <img src="/assets/images/home/hero-card-product-2.png" class="w-48" alt="Pack sécurité image">
                                </x-slot>

                                <x-slot name="description">
                                    Voir tous nos packs solutions en un coup d'œil.
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
                            <div class="flex flex-col gap-8">
                                <div class="card py-4 px-6 shadow-[-7px_5px_18px_2px_rgba(0,0,0,0.12)] rounded-lg hover:cursor-pointer h-full">
                                    <div class="h-full flex items-center justify-between gap-8">
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-3xl font-bold">Caméra</h3>
                                        </div>
                                        <div class="flex flex-col gap-4 items-end justify-end">
                                            <img src="/assets/images/home/hero-card-product-3.png" class="w-14" alt="Pack sécurité image">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l14 0"></path>
                                                <path d="M15 16l4 -4"></path>
                                                <path d="M15 8l4 4"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="card py-4 px-6 shadow-[-7px_5px_18px_2px_rgba(0,0,0,0.12)] rounded-lg hover:cursor-pointer h-full">
                                    <div class="h-full flex items-center justify-between gap-8">
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-3xl font-bold">Alarmes</h3>
                                        </div>
                                        <div class="flex flex-col gap-4 items-end justify-end">
                                            <img src="/assets/images/home/hero-card-product-4.png" class="w-14" alt="Pack sécurité image">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l14 0"></path>
                                                <path d="M15 16l4 -4"></path>
                                                <path d="M15 8l4 4"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl xl:max-w-8xl mx-auto px-8 flex flex-col items-center py-20 space-y-10">
        <h1 class="text-5xl font-bold">{{ __("Nos marques") }}</h1>
        <div class="w-full flex gap-12 justify-between items-center">
            @foreach($brands as $brand)
                <div>
                    <img class="h-44 w-auto rounded-lg" src="{{ $brand->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $brand->name }}">
                </div>
            @endforeach

        </div>
        <a class="btn bg-black text-white px-12" href="{{ route('site.products.index') }}">{{ __("Voir plus") }}</a>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center py-20 space-y-40">

        <div class="grid grid-cols-12">
            <div class="rounded-lg p-16 bg-[#FFEE75] col-span-9 col-start-1 row-start-1 py-20">
                <div class="w-[80%] flex flex-col items-start gap-6">
                    <h2 class="text-5xl font-bold leading-tight">Éclairage, Ombrage et Confort</h2>

                    <p>
                        Chez Dia Smart, nous comprenons que ces éléments sont essentiels pour créer une ambiance
                        harmonieuse dans votre maison. C'est pourquoi nous offrons des solutions intégrées pour
                        que votre maison soit parfaitement éclairée, confortable et à l'abri des regards...
                    </p>

                    <a href="{{ route('site.products.index') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Éclairage
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-4 col-start-9 row-start-1 flex justify-center items-center">
                <img class="rounded-lg" src="/assets/images/home/service-1.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-12">

            <div class="rounded-lg p-16 col-span-9 col-start-4 row-start-1 flex justify-end bg-[#FFD873] py-20">
                <div class="w-[80%] flex flex-col items-start gap-6">
                    <h2 class="text-5xl font-bold leading-tight">Divertissement</h2>

                    <p>
                        Nous croyons que votre espace de vie devrait être un lieu où vous pouvez vous détendre,
                        vous divertir et profiter pleinement de vos loisirs. C'est pourquoi nous offrons des
                        solutions de divertissement intelligemment conçues pour répondre à tous vos besoins.
                    </p>

                    <a href="{{ route('site.products.index') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Capteur
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-span-4 col-start-1 row-start-1 flex justify-center items-center">
                <img class="rounded-lg" src="/assets/images/home/service-2.png" alt="">
            </div>

        </div>

        <div class="grid grid-cols-12">
            <div class="rounded-lg p-16 col-span-9 col-start-1 row-start-1 bg-[#FFBF75] py-20">
                <div class="w-[80%] flex flex-col items-start gap-6">
                    <h2 class="text-5xl font-bold leading-tight">Sécurité & Contrôle d'Accès</h2>

                    <p>
                        La sécurité et le contrôle d'accès sont des éléments cruciaux de tout espace de vie intelligent.
                        Chez Dia Smart, nous mettons en place des solutions de pointe pour protéger votre maison et
                        offrir une tranquillité d'esprit inégalée.
                    </p>

                    <a href="{{ route('site.products.index') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Caméra
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-4 col-start-9 row-start-1 flex justify-center items-center">
                <img class="rounded-lg" src="/assets/images/home/service-3.png" alt="">
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center">
        <a class="btn btn-black px-14 font-bold">Voir tous les produits</a>
    </div>

    <div class="shadow-topBottom py-10 my-20">
        <div class="max-w-6xl mx-auto px-8 flex flex-col items-center space-y-10">
            <h2 class="text-3xl font-bold">Best selling</h2>

            <x-alpine-carousel >
                @foreach(\Shopper\Framework\Models\Shop\Product\Product::all() as $product)
                    <a href="{{ route('site.products.show', $product) }}"
                        class="block ml-4 flex-auto flex-grow-0 flex-shrink-0 w-56 rounded-lg items-center justify-center snap-center overflow-hidden">
                        <div>
                            <img src="{{ $product->getFirstMediaurl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $product->name }} image">
                        </div>
                        <div class="px-2 py-3 flex justify-between">
                            <div class="text-lg font-semibold">{{ $product->name }}</div>
                        </div>
                    </a>
                @endforeach
            </x-alpine-carousel>

            <a class="btn bg-black text-white shadow-md px-12" href="{{ route('site.products.index') }}">
                {{ __("Voir plus") }}
            </a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 flex flex-col items-center py-20">

        <div class="grid grid-cols-12">
            <div class="col-span-9 col-start-1 row-start-1 flex justify-center items-center">
                <img class="rounded-lg" src="/assets/images/home/service-4.png" alt="">
            </div>

            <div class="rounded-lg col-span-5 lg:col-start-8 xl:col-start-9 row-start-1 flex items-center">
                <div class="flex flex-col items-start gap-6">
                    <h2 class="text-6xl font-bold">
                        Faites passer votre maison
                        au niveau supérieur
                    </h2>

                    <a href="{{ route('site.products.index') }}" class="btn bg-white rounded-full flex gap-4 shadow-md">
                        Voir tous les produits
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
