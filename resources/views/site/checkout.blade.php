<x-site-layout>
    @section('title', "Checkout - " . \Shopper\Framework\Models\System\Setting::where('key', 'shop_name')->first()?->value)
    @push('stacked_seo')
        <meta name="keywords" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_keywords')->first()?->value }}">
        <meta name="description" content="{{ \Shopper\Framework\Models\System\Setting::where('key', 'meta_description')->first()?->value }}">
    @endpush

    <div class="max-w-7xl mx-auto px-4 flex flex-col items-center mt-20">
        <h2 class="text-3xl lg:text-5xl font-bold uppercase text-center mb-20">Checkout</h2>

        <livewire:checkout />
    </div>
</x-site-layout>
