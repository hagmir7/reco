<div class="w-full space-y-8">
    <div class="flex flex-col lg:flex-row gap-4 justify-between">
        <div>
            <div>
                <label class="text-sm block mb-1">{{ __("Categories") }}</label>
                <select wire:model="category" class="border border-2 border-gray-900 px-3 py-2 rounded-lg outline-none">
                    <option value="">{{ __("Select a category") }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->slug }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div>
            <div>
                <label class="text-sm block mb-1">{{ __("Search") }}</label>
                <input type="search" wire:model.debounce.800ms="search" class="border border-2 border-gray-900 px-3 py-2 rounded-lg outline-none">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">
        @foreach($products as $product)
            <a href="{{ route('site.products.show', $product) }}" class="group grid rounded-lg shadow hover:shadow-none overflow-hidden" x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
                <img class="col-start-1 col-span-full row-span-full lazy" data-src="{{ $product->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="">
                <div x-show="open" x-cloak
                     x-transition:enter="transition-transform delay-75 ease-in-out transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition-transform delay-75 ease-in-out transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="translate-x-full"
                    class="bg-gray-500/60 col-start-1 col-span-full row-span-full">
                    <div class="hidden w-full h-full p-6 lg:flex flex-col gap-2 justify-end">
                        <div class="flex justify-between">
                            <h2 class="text-lg font-bold text-gray-50">{{ $product->name }}</h2>
                            <span class="text-primary-500">
                                {{ $product->formattedPrice }}
                            </span>
                        </div>
                        <p class="text-gray-50">{{ \Illuminate\Support\Str::limit(strip_tags($product->description), 90) }}</p>
                    </div>
                </div>
                <div class="flex flex-col lg:hidden gap-2">
                    <div class="flex flex-col md:flex-row md:justify-between md:mt-4 gap-1">
                        <h2 class="text-lg font-bold">{{ $product->name }}</h2>
                        <span class="text-md text-primary-600">
                        {{ $product->formattedPrice }}
                    </span>
                    </div>
                    <p class="text-gray-200 m-0">{!! \Illuminate\Support\Str::limit($product->description) !!}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
