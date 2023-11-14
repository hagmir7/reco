<x-site-layout>
    @section('title', "A propos - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @section('meta_keywords', \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value)
    @section('meta_description', \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value)

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
                    <span class="font-extrabold text-transparent bg-clip-text font-extrabold text-transparent bg-clip-text bg-primary-500 lg:bg-[#F3CF12]">maisons intelligentes</span>
                    ne sont pas seulement une collection d'appareils
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col mt-20 space-y-28">
        <div>
            <h2 class="text-4xl font-bold text-center mb-5">Notre histoire</h2>
            <div class="text-center">
                Diadesign et l'inventeur Hafid Saoudi ont uni leurs forces pour créer une fusion remarquable appelée Dia Smart.
                Cette collaboration a donné naissance à une solution révolutionnaire dans le domaine de la smart home et
                de la domotique, offrant aux utilisateurs une expérience connectée et intuitive.
                Grâce à Dia Smart, la technologie innovante rencontre le design d'exception pour
                transformer nos maisons en véritables havres intelligents.
            </div>
        </div>
        <div class="grid lg:grid-cols-2 lg:divide-x space-y-20 lg:space-y-0">
            <div class="flex flex-col items-center gap-6 lg:pr-10">
                <img class="w-44" src="https://www.diadesign.ma/wp-content/uploads/2021/11/cropped-Dialogoo.png" alt="Dia Design logo">

                <div class="text-justify">
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

            <div class="flex flex-col items-center gap-6 lg:pl-10">
                <h2 class="text-2xl lg:text-4xl font-bold">
                    <a href="#">Hafid SAAOUDI</a>
                </h2>

                <div class="text-justify">
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

        <div class="flex flex-col lg:flex-row items-center gap-6 max-w-4xl mx-auto">
            <img class="w-36" src="{{ config('shopper.system.logo-svg') }}" alt="{{ config('app.name') }}" />
            <div class="flex flex-col items-center lg:items-start">

                <div>
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

    <div class="max-w-7xl mx-auto px-4 flex flex-col mt-20">

    </div>


</x-site-layout>
