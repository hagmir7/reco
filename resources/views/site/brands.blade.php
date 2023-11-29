<x-site-layout>
    @section('title', "Brands - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
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
                    maison offre <x-special-text>émerveillement et détente.</x-special-text>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl xl:max-w-8xl mx-auto px-8 flex flex-col items-center py-10 space-y-10">
        <h1 class="text-4xl lg:text-5xl font-bold">{{ __("Our brands") }}</h1>
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 space-y-4 py-4 md:px-12 ">

            @foreach($brands as $brand)
                <div class="flex-auto flex-grow-0 flex-shrink-0">
                    <img class="w-56 rounded-lg lazy" data-src="{{ $brand->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $brand->name }}">
                </div>
            @endforeach

        </div>

        <a class="btn bg-black text-white px-12 mt-20" href="{{ route('site.products.index') }}">
            {{ __("Voir tous les produits") }}
        </a>
    </div>

</x-site-layout>
