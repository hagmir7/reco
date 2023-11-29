<x-site-layout>
    @section('title', "ÉCLAIRAGE, OMBRAGE - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @push('stacked_seo')
        <meta name="keywords" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value }}">
        <meta name="description" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value }}">
    @endpush

    <div class="grid grid-cols-2">
        <div class="col-span-full lg:col-span-1 row-span-full z-10 flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="p-8 uppercase font-extrabold text-4xl lg:text-5xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                    <x-special-text>Redéfinissez votre espace</x-special-text>
                    de vie avec éclairage, ombrage et confort innovants.
                </div>
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] lg:rounded-bl-lg lazy header-bg" data-bgimg="/assets/images/eclairage/banner.png">
            </div>
        </div>
    </div>

    <div class="max-w-3xl mx-auto px-4 flex flex-col mt-20">
        <p class="text-center text-lg md:text-xl lg:text-2xl">
            Nous redéfinissons l'expérience domestique en intégrant de manière experte l'éclairage, l'ombrage et le confort.
            Plongez dans un monde où chaque coin de votre maison est imprégné d'une ambiance harmonieuse,
            conçue pour répondre à vos besoins les plus subtils.
        </p>
    </div>

    <div class="grid mt-20 min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full w-full object-cover"
             data-src="/assets/images/eclairage/1.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">Éclairage d'Exception :</h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Nos solutions d'éclairage intelligentes offrent une flexibilité inégalée, permettant un contrôle
                        total de la luminosité et de la teinte. Que ce soit pour créer une atmosphère apaisante,
                        stimuler la productivité ou simplement illuminer votre foyer, nos options d'éclairage
                        s'adaptent à chaque moment de votre journée.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid -my-4  min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full w-full object-cover"
             data-src="/assets/images/eclairage/2.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Ombrage sur Mesure
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Protégez votre intimité tout en maximisant la lumière naturelle avec nos solutions d'ombrage intelligentes.
                        Du contrôle des stores à l'automatisation des rideaux, nous mettons l'ombrage entre vos mains.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid  min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full w-full object-cover"
             data-src="/assets/images/eclairage/3.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">Confort Personnalisé :</h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Nos technologies intégrées sont conçues pour optimiser le confort, en tenant compte de vos préférences individuelles.
                        Des réglages automatisés qui anticipent vos besoins aux commandes intuitives qui mettent le contrôle à portée de main,
                        chaque détail est pensé pour rendre votre espace de vie aussi personnalisé que vous.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid -mt-10 lg:-mt-20 place-items-center">
        <img class="col-start-1 col-span-full row-span-full lazy"
             data-src="/assets/images/arrow-down.png"
             alt="image de 1">
    </div>

    <div class="max-w-3xl mx-auto px-4 flex flex-col mt-20 items-center">
        <p class="text-center text-lg md:text-xl lg:text-2xl">
            Nous redéfinissons l'expérience domestique en intégrant de manière experte l'éclairage,
            l'ombrage et le confort. Plongez dans un monde où chaque coin de votre maison
            est imprégné d'une ambiance harmonieuse, conçue pour répondre à vos besoins les plus subtils.
        </p>

        <a class="btn bg-black text-white px-12 mt-20" href="{{ route('site.products.index') }}">
            {{ __("Voir tous les produits") }}
        </a>
    </div>


</x-site-layout>
