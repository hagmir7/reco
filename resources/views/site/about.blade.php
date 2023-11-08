<x-site-layout>
    <div class="grid grid-cols-2">
        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] rounded-br-lg lazy"
                 data-bgimg="/assets/images/about/banner.png"
                 style="background-repeat: no-repeat; background-size: cover; background-position: bottom;">
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="p-8 uppercase font-extrabold text-4xl lg:text-6xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                    Les
                    <span class="font-extrabold text-transparent bg-clip-text font-extrabold text-transparent bg-clip-text bg-[#F3CF12]">maisons intelligentes</span>
                    ne sont pas seulement une collection d'appareils
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col mt-20">
        <h2 class="text-4xl font-bold text-center lg:text-start mb-5">Qu'est-ce qu'une maison intelligente?</h2>
        <div class="grid grid-cols-3 grid-rows-2 content-center lg:grid-rows-1 justify-items-center lg:justify-items-end">
            <p class="col-span-full lg:col-span-2 row-[2_/_span_2] lg:row-start-1 lg:row-span-full">
                Bienvenue chez Dia Smart !
                Qu'est-ce qu'une Maison Intelligente ?
                Toute votre technologie fonctionne de manière harmonieuse pour rendre votre maison ou votre entreprise plus intelligente.
                Le nombre d'appareils connectés dans le monde augmente de manière exponentielle.
                Il semble que tout ce que nous achetons de nos jours ait "une application pour cela".
                Et puis il y a toutes les télévisions, les chaînes Hi-Fi, le chauffage, la sécurité,
                les portes de garage et autres équipements déjà présents dans nos foyers, chacun nécessitant une forme de télécommande,
                de clavier, de porte-clés ou de panneau de contrôle. Ne serait-il pas agréable que tout fonctionne ensemble,
                avec un seul écran de menu simple qui vous permette de contrôler tout dans votre maison où que vous soyez ?
                Quelque chose que vous pourriez accéder depuis un écran tactile encastré, un appareil mobile, un ordinateur,
                ou même sur votre télévision ? L'automatisation résidentielle de Dia Smart rend tout cela possible, et bien plus encore.
                Pourquoi ne pas nous contacter pour découvrir comment nous pourrions rendre votre maison plus intelligente dès aujourd'hui ?
                Nos experts concevront un système de maison intelligente adapté à vos besoins spécifiques.
            </p>

            <img class="col-span-full lg:col-span-1 row-start-1 row-end-2 lg:row-span-full lazy" data-src="/assets/images/about/product.png">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col items-center mt-20">
        <h2 class="text-4xl font-bold mb-5">Notre Conception</h2>
        <p class="col-span-2 text-left lg:text-center max-w-2xl">
            Suite à une consultation approfondie, nous concevrons un système de maison intelligente sur mesure, parfaitement adapté à vos besoins. Une bonne conception est la base d'un projet réussi. Il s'agit de comprendre vos besoins et vos habitudes de vie, et de créer des solutions pour les améliorer et les enrichir. Il s'agit de savoir comment différentes technologies interagissent et de parvenir à la bonne esthétique. Rien ne doit être laissé au hasard. Après une consultation approfondie, nous établirons une proposition de système détaillée et personnalisée pour votre projet. Nous passerons ensuite en revue tous les détails avec vous avant que vous ne vous engagiez, afin que vous sachiez exactement ce que vous obtiendrez et ce que le système peut faire pour vous, à la fois maintenant et à l'avenir. Laissez-nous nous occuper des complexités pendant que vous profitez d'une maison intelligente magnifique, simple et immersive.
        </p>
    </div>

    <div class="shadow-topBottom py-10 my-20">
        <div class="max-w-6xl mx-auto flex flex-col items-center space-y-10">
            <h2 class="text-3xl font-bold">Featured products</h2>

            <x-alpine-carousel >
                @foreach($featured_products as $product)
                    <a href="{{ route('site.products.show', $product) }}"
                       class="block flex-auto flex-grow-0 flex-shrink-0 w-64 rounded-lg items-center justify-center snap-center shadow overflow-hidden">
                        <div>
                            <img src="{{ $product->getFirstMediaurl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $product->name }} image">
                        </div>
                        <div class="px-2 py-3 flex flex-col justify-between">
                            <div class="text-lg font-semibold leading-tight mb-2">{{ \Illuminate\Support\Str::limit($product->name, 40) }}</div>
                            <div class="text-sm text-gray-400">{{ \Illuminate\Support\Str::printLimitedHtml($product->description, 80) }}</div>
                        </div>
                    </a>
                @endforeach
            </x-alpine-carousel>

            <a class="btn bg-black text-white shadow-md px-12" href="{{ route('site.products.index') }}">{{ __("Voir plus") }}</a>
        </div>
    </div>

</x-site-layout>
