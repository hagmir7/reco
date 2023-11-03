<x-site-layout>
    <div class="grid grid-cols-2 min-h-screen mt-12">
        <div class="flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="uppercase font-extrabold text-5xl max-w-[500px]">
                    Les marques que vous aimez, unies avec Dia smart.
                </div>
            </div>
        </div>

        <div class="min-h-screen">
            <div class=" min-h-screen h-[720px] rounded-l-lg" style="background-image: url('/assets/images/products/banner.png'); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto flex flex-col items-center mt-20">
        <h2 class="text-5xl font-bold uppercase mb-6">Solutions de maison intelligente</h2>
        <p class="text-lg uppercase lg:max-w-[50%] text-center">Découvrez ce que votre maison intelligente peut faire avec les appareils compatibles de vos marques préférées.</p>
    </div>

    <div class="max-w-7xl mx-auto flex flex-col items-center mt-20">
        <livewire:site.products-list />
    </div>

</x-site-layout>
