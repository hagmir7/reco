<x-site-layout>
    @section('title', "A propos - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @push('stacked_seo')
        <meta name="keywords" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value }}">
        <meta name="description" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value }}">
    @endpush


    <div class="grid grid-cols-2">
        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] rounded-br-lg lazy header-bg"
                 data-bgimg="/assets/images/about/banner.png">
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="p-8 uppercase font-extrabold text-4xl lg:text-6xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                    Les
                    <x-special-text>maisons intelligentes</x-special-text>
                    ne sont pas seulement une collection d'appareils
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col mt-20 space-y-28">
        <div class="flex flex-col md:flex-row items-center justify-center gap-10">
            <h2 class="text-6xl uppercase max-w-sm font-extrabold mb-5">Notre histoire</h2>
            <span class="hidden md:block w-44 h-0 border-2 border-primary-500"></span>
            <div class="max-w-lg">
                Diadesign et l'inventeur Hafid Saoudi ont uni leurs forces pour créer une fusion remarquable appelée Dia Smart.
                Cette collaboration a donné naissance à une solution révolutionnaire dans le domaine de la smart home et
                de la domotique, offrant aux utilisateurs une expérience connectée et intuitive.
                Grâce à Dia Smart, la technologie innovante rencontre le design d'exception pour
                transformer nos maisons en véritables havres intelligents.
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center gap-10">
            <div class="max-w-4xl grid">
                <img class="col-[1_/_span_full] row-[1_/_span_full] w-full" src="/assets/images/about/bg-gradient-1.png" alt="Dia Design logo">

                <div class="col-[1_/_span_full] row-[1_/_span_full] py-10 grid grid-cols-12 grid-rows-4 items-center">

                    <div class="col-[5_/_span_4] row-[2_/_span_2] h-full border-4 border-t-0 shadow-md rounded-lg border-white"></div>

                    <h2 class="col-[1_/_span_5] row-[1_/_span_2] justify-self-end bg-white shadow-md px-4 py-2 uppercase rounded-lg text-2xl lg:text-2xl font-bold">
                        <a href="#">Hafid SAAOUDI</a>
                    </h2>
                    <div class="col-[6_/_span_2] row-[1_/_span_2] justify-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white font-extrabold" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    </div>
                    <img class="col-[8_/_span_5] row-[1_/_span_2] bg-white shadow-md px-4 py-2 rounded-lg w-44" src="https://www.diadesign.ma/wp-content/uploads/2021/11/cropped-Dialogoo.png" alt="Dia Design logo">

                    <div class="col-span-full row-[3_/_span_2] justify-self-center bg-white shadow-md px-16 py-2 rounded-lg">
                        <img class="h-12" src="{{ config('shopper.system.logo-svg') }}" alt="{{ config('app.name') }}" />
                    </div>

                </div>

            </div>
        </div>

        <div class="md:hidden flex flex-col items-center py-10 rounded-xl shadow-md bg-primary-500">

            <div class="flex flex-col items-center gap-6">
                <h2 class="bg-white shadow-md px-4 py-2 uppercase rounded-lg text-2xl lg:text-2xl font-bold">
                    <a href="#">Hafid SAAOUDI</a>
                </h2>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white font-extrabold" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                </div>

                <img class="bg-white shadow-md px-4 py-2 rounded-lg w-44" src="https://www.diadesign.ma/wp-content/uploads/2021/11/cropped-Dialogoo.png" alt="Dia Design logo">
            </div>

            <span class="block h-24 h-0 border-r-4 border-white"></span>

            <div class="col-span-full row-[3_/_span_2] justify-self-center bg-white shadow-md px-16 py-2 rounded-lg">
                <img class="h-12" src="{{ config('shopper.system.logo-svg') }}" alt="{{ config('app.name') }}" />
            </div>
        </div>

    </div>

    <div class="px-4">
        <div class="relative max-w-7xl mx-auto px-4 flex flex-col mt-20 z-0 space-y-28 header-bg py-20 bg-white rounded-3xl shadow-[0px_0px_11px_5px_rgba(0,0,0,0.1)]"
             style="background-image: url('/assets/images/about/rect-left-grad.png')">

            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <h2 class="text-5xl uppercase max-w-sm font-extrabold mb-5">Hafid SAAOUDI</h2>
                <span class="hidden md:block w-44 h-0 border-2 border-primary-500"></span>
                <div class="max-w-lg">
                    Hafid Saoudi est un inventeur passionné et visionnaire dans le domaine de la smart home et de la domotique.
                    Originaire du Maroc, il a consacré sa carrière à développer des solutions innovantes pour rendre nos maisons
                    plus intelligentes et plus connectées. Grâce à son expertise technique et à sa créativité,
                    Hafid a réussi à concevoir des systèmes domotiques avancés qui simplifient la vie quotidienne des utilisateurs.
                    Ses inventions permettent de contrôler et de gérer divers aspects de la maison à partir d'un appareil
                    mobile ou d'un assistant vocal, offrant ainsi confort, sécurité et efficacité énergétique.
                    Avec son esprit pionnier, Hafid Saoudi continue de repousser les limites de la smart home et
                    de la domotique, transformant nos maisons en véritables havres de technologie.
                </div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 flex flex-col -mt-5 z-50 space-y-28 header-bg py-20 bg-white rounded-3xl shadow-[0px_0px_11px_5px_rgba(0,0,0,0.1)]"
             style="background-image: url('/assets/images/about/rect-left-grad.png')">
            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <img class="w-56" src="https://www.diadesign.ma/wp-content/uploads/2021/11/cropped-Dialogoo.png" alt="Dia Design logo">
                <span class="hidden md:block w-44 h-0 border-2 border-primary-500"></span>
                <div class="max-w-lg">
                    Dia Design est un studio d'architecture d'intérieur établi à Fès, au Maroc.
                    Fondé en 2016 par l'architecte Zouhair Amal Filali, notre atelier se conforme aux normes de l'industrie.
                    Notre équipe qualifiée possède un savoir-faire unique et une capacité à innover.
                    Grâce à notre écoute attentive et à notre esprit créatif, nous comprenons vos besoins et nous adaptons à vos préférences pour concrétiser vos projets.
                    Notre domaine d'intervention englobe la conception, l'aménagement, la rénovation et le suivi de chantier pour différents
                    types de bâtiments tels que les habitations, les commerces, les bureaux et les institutions.
                    Dans le but de créer un environnement intérieur qui vous ressemble et une atmosphère conviviale,
                    nous prenons également en charge le choix des matériaux, de l'éclairage, des meubles,
                    des meubles sur mesure et même de la décoration. Rien n'est laissé de côté, car chaque détail compte.
                </div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 flex flex-col -mt-5 -z-0 space-y-28 header-bg py-20 bg-white rounded-3xl shadow-[0px_0px_11px_5px_rgba(0,0,0,0.1)]"
             style="background-image: url('/assets/images/about/rect-left-grad.png')">
            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <img class="w-36" src="{{ config('shopper.system.logo-svg') }}" alt="{{ config('app.name') }}" />
                <span class="hidden md:block w-44 h-0 border-2 border-primary-500"></span>
                <div class="max-w-lg">
                    Nous sommes ravis de collaborer avec Hafid Saoudi, un expert en maisons intelligentes renommé.
                    Avec son savoir-faire technique et sa capacité à intégrer des technologies de pointe,
                    Hafid Saoudi crée des systèmes domotiques de haut niveau qui offrent confort, sécurité et efficacité énergétique.
                    Son approche holistique de la conception et de l'installation garantit une solution sur mesure pour chaque cliente,
                    en tenant compte de leurs besoins spécifiques. Hafid Saoudi est également très attentif à l'expérience utilisateur,
                    en veillant à ce que les maisons connectées soient conviviales et facilement contrôlables à partir de n'importe quel appareil.
                    En choisissant Hafid Saoudi, vous pouvez être sûr d'avoir une maison smart de qualité supérieure qui améliorera votre quotidien.
                </div>
            </div>
        </div>
    </div>

</x-site-layout>
