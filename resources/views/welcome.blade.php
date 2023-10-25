<x-site-layout>
    <div class="relative min-h-screen">
        <div class="absolute top-0 left-0 min-h-screen flex w-full">
            <div class="w-full"></div>
            <div class="min-h-screen h-[1080px] w-full" style="background-image: url('/assets/images/home/hero-image.png'); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
            </div>
        </div>

        <div class="w-full absolute top-0 left-0">
            <div class="max-w-7xl mx-auto">
                <div class="pt-48 pb-16 flex flex-col items-start gap-6">
                    <div class="uppercase font-extrabold text-5xl max-w-[475px] drop-shadow-lg">
                        La Technologie Simplifiée pour rendre votre maison plus intelligente
                    </div>

                    <a class="btn btn-black px-14 font-bold">Voir tous les produits</a>
                </div>

                <div class="py-12">
                    <div class="grid grid-cols-3 gap-12">
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
                            <x-home.header.card title="Pack sécurité">
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
                                            <h3 class="text-3xl font-bold">Caméra</h3>
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
</x-site-layout>
