@props(['product'])
<a {{ $attributes->merge(["href" => route('site.products.show', $product), "class" => "flex-auto flex-grow-0 flex-shrink-0 group grid rounded-lg shadow hover:shadow-none overflow-hidden"]) }} x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
    <img class="col-start-1 col-span-full row-span-full lazy"
         src="{{ url('/shopper/images/product_placeholder.jpg') }}"
         data-src="{{ $product->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}"
         alt="image de {{ $product->name }}">
    <div x-show="open" x-cloak
         x-transition:enter="transition-opacity delay-75 ease-in-out"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-1"
         x-transition:leave="transition-opacity delay-75 ease-in-out"
         x-transition:leave-start="opacity-1"
         x-transition:leave-end="opacity-0"
         class="bg-gray-500/70 col-start-1 col-span-full row-span-full">
        <div class="hidden w-full h-full p-6 lg:flex flex-col gap-2 justify-end">
            <div class="flex flex-col">
                <h2 class="text-lg font-bold text-gray-50">{{ \Illuminate\Support\Str::limit($product->name, 40) }}</h2>
                <span class="text-primary-500">
                    {{ $product->formattedPrice }}
                </span>
            </div>
            <p class="text-gray-50">
                Voir plus...
            </p>
        </div>
    </div>
    <div class="flex flex-col lg:hidden gap-2 px-2 md:px-4 pb-4">
        <div class="flex flex-col md:mt-4 gap-1">
            <h2 class="text-sm md:text-md font-semibold">{{ \Illuminate\Support\Str::limit($product->name, 40) }}</h2>
            <span class="text-md text-primary-600">
                {{ $product->formattedPrice }}
            </span>
        </div>
    </div>
</a>
