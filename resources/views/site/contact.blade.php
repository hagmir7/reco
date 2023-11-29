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
                    Contactez-nous pour toute demande,
                    <x-special-text>notre équipe</x-special-text>
                    est toujours à votre disposition.

                </div>
            </div>
        </div>

        <div class="col-span-full lg:col-span-1 row-span-full">
            <div class="h-[720px] lg:rounded-bl-lg lazy header-bg" data-bgimg="/assets/images/contact/banner.png">
            </div>
        </div>
    </div>


    <div class="max-w-lg mx-auto mt-2 space-y-4 py-20 px-4">
        <h2 class="text-4xl font-semibold">Contactez un technicien</h2>
        <h3>Veuillez remplir le formulaire de contact suivant.</h3>
        <livewire:site.client-request-form />
    </div>


</x-site-layout>
