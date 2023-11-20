<x-site-layout>
    @section('title', "ÉCLAIRAGE, OMBRAGE - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @push('stacked_seo')
        <meta name="keywords" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value }}">
        <meta name="description" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value }}">
    @endpush

    <div class="grid grid-cols-2">
        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] lg:rounded-br-lg lazy header-bg" data-bgimg="/assets/images/divertissement/banner.png">
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full z-10 flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="p-8 uppercase font-extrabold text-4xl lg:text-5xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                    Bienvenue chez nous, où chaque instant à la
                    maison offre émerveillement et détente.
                </div>
            </div>
        </div>
    </div>

    <div class="grid mt-40 min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full object-cover"
             data-src="/assets/images/divertissement/1.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Bienvenue dans notre monde dédié au divertissement
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Où chaque instant à la maison est une invitation à l'émerveillement et à la détente.
                        Nous pensons que votre espace de vie devrait être plus qu'un simple lieu,
                        il devrait être le cadre idéal pour exprimer votre passion pour le divertissement.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid -mt-20 min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy  h-full object-cover"
             data-src="/assets/images/divertissement/2.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Chaque détail a été méticuleusement pensé
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Pour créer une harmonie entre le design esthétique et la performance exceptionnelle.
                        Nous croyons en l'importance de faire de votre espace un refuge où le divertissement
                        devient une véritable expérience personnalisée. Profitez de chaque moment, que ce
                        soit en solo ou en compagnie de vos proches, dans un environnement qui incite à
                        la convivialité et à la joie.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid -mt-20 place-items-center">
        <img class="col-start-1 col-span-full row-span-full lazy"
             data-src="/assets/images/arrow-down.png"
             alt="image de 1">
    </div>

    <div class="max-w-3xl mx-auto px-4 flex flex-col mt-20 items-center">
        <p class="text-center text-lg md:text-xl lg:text-2xl">
            Chez nous, le divertissement ne se limite pas à une activité, mais devient une partie intégrante de
            votre mode de vie. Rejoignez-nous dans cette aventure où chaque jour est une nouvelle opportunité de
            créer des souvenirs inoubliables. Bienvenue dans notre univers, où le divertissement
            prend vie avec élégance et passion.
        </p>

        <a class="btn bg-black text-white px-12 mt-20" href="{{ route('site.products.index') }}">
            {{ __("Voir tous les produits") }}
        </a>
    </div>


</x-site-layout>
