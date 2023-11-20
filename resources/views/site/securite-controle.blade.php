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
                    Dia Smart : Sécurité innovante, contrôle d'accès intuitif, tranquillité d'esprit assurée.
                </div>
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] lg:rounded-bl-lg lazy header-bg" data-bgimg="/assets/images/security/banner.png">
            </div>
        </div>
    </div>

    <div class="grid mt-20 min-h-[480px] mt-40">
        <img class="col-start-1 col-span-full row-span-full lazy h-full object-cover"
             data-src="/assets/images/security/1.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Explorez l'avenir de la sécurité et du contrôle d'accès avec Dia Smart
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Nous comprenons l'importance cruciale de protéger votre espace de vie,
                        c'est pourquoi nous avons développé des solutions avant-gardistes qui
                        garantissent la sécurité de votre maison tout en vous offrant une
                        tranquillité d'esprit inégalée.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid -my-4  min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full object-cover"
             data-src="/assets/images/security/2.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Nos systèmes de sécurité intègrent une technologie de pointe
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Pour détecter et répondre aux menaces potentielles, assurant une protection 24 heures sur 24.
                        Le contrôle d'accès est simplifié grâce à des fonctionnalités intelligentes qui vous
                        permettent de surveiller et de gérer l'accès à votre domicile, où que vous soyez.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid  min-h-[480px]">
        <img class="col-start-1 col-span-full row-span-full lazy h-full object-cover"
             data-src="/assets/images/security/3.png"
             alt="image de 1">
        <div class="col-start-1 col-span-full row-span-full  max-w-7xl mx-auto px-4 flex flex-col">
            <div class="max-w-4xl w-full h-full grid place-items-center">
                <div class="space-y-6 text-white text-center lg:text-start">
                    <h2 class="text-2xl md:text-5xl lg:text-7xl font-semibold leading-tight tracking-tighter">
                        Chez Dia Smart, notre engagement envers la sécurité va au-delà de la technologie
                    </h2>
                    <p class="text-lg md:text-xl lg:text-2xl">
                        Il s'agit d'instaurer une confiance totale. Chaque aspect de nos solutions est conçu
                        pour s'adapter à votre mode de vie, offrant une expérience intuitive et fiable.
                        Découvrez la tranquillité d'esprit associée à une sécurité proactive et à un
                        contrôle d'accès sans faille. Bienvenue dans un univers où votre
                        sécurité est notre priorité absolue.
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
        <a class="btn bg-black text-white px-12" href="{{ route('site.products.index') }}">
            {{ __("Voir tous les produits") }}
        </a>
    </div>


</x-site-layout>
