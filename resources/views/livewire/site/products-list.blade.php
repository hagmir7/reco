<div class="w-full space-y-8">
    <div class="flex justify-between">
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
            <a href="{{ route('site.products.show', $product) }}" class="group grid rounded-lg overflow-hidden" x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
                <img class="col-start-1 col-span-full row-span-full" src="{{ $product->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="">
                <div x-show="open" x-cloak
                     x-transition:enter="transition-transform delay-75 ease-in-out transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition-transform delay-75 ease-in-out transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="translate-x-full"
                    class="bg-gray-500/60 col-start-1 col-span-full row-span-full">
                    <div class="w-full h-full p-6 flex flex-col justify-end">
                        <div class="flex justify-between">
                            <h2 class="text-lg text-gray-50">{{ $product->name }}</h2>
                            <span class="text-primary-500">
                                {{ $product->formattedPrice }}
                            </span>
                        </div>
                        <p class="text-gray-200">{{ $product->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
