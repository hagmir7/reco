<x-site-layout>
    @section('title', "Nos produits - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @section('meta_keywords', \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value)
    @section('meta_description', \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value)

    <div class="grid grid-cols-2">
        <div class="col-span-full lg:col-span-1 row-span-full z-10 flex items-center justify-center">
            <div class="flex flex-col items-start justify-center">
                <div class="p-8 uppercase font-extrabold text-4xl lg:text-6xl text-white lg:text-black text-center lg:text-start max-w-[700px]">
                    Les marques que vous aimez, unies avec
                    <span class="font-extrabold text-transparent bg-clip-text font-extrabold text-transparent bg-clip-text bg-primary-500 lg:bg-[#F3CF12]">Diasmart.</span>
                </div>
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] lg:rounded-bl-lg lazy header-bg"
                 data-bgimg="/assets/images/products/banner.png">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col items-center my-20">
        <h2 class="text-3xl lg:text-5xl font-bold uppercase text-center mb-6">Solutions de maison intelligente</h2>
        <p class="text-md lg:text-lg uppercase lg:max-w-[50%] text-center">Découvrez ce que votre maison intelligente peut faire avec les appareils compatibles de vos marques préférées.</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 flex flex-col items-center mt-20">
        <livewire:site.products-list />
    </div>

</x-site-layout>
