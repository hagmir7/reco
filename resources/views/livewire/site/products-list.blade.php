<div class="w-full space-y-8">
    <div class="flex flex-col lg:flex-row gap-4 justify-between">
        <div>
            <div>
                <label class="text-sm block mb-1">{{ __("Categories") }}</label>
                <select wire:model="category" class="w-56 border border-2 border-gray-900 px-3 py-2 rounded-lg outline-none">
                    <option value="">{{ __("Tous") }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->slug }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div>
            <div>
                <label class="text-sm block mb-1">{{ __("Search") }}</label>
                <div class="relative">
                    <input type="text"
                           wire:model.debounce.800ms="search"
                           placeholder="Entrez des mots-clés"
                           class="w-56 border border-2 pr-10 border-gray-900 px-3 py-2 rounded-lg outline-none">

                    <div class="absolute right-4 top-0 h-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12" wire:loading.grid>
        <div class="rounded-lg shadow overflow-hidden image-loader"></div>
        <div class="rounded-lg shadow overflow-hidden image-loader"></div>
        <div class="rounded-lg shadow overflow-hidden image-loader"></div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12" wire:loading.remove>
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</div>

@push('stacked_scripts')
    <script>
        Livewire.hook('message.processed', function () {
            // Check for IntersectionObserver support
            if ('IntersectionObserver' in window) {
                loadLazyImages();
            } else {
                unsupportedLazyLoading();
            }
        });
    </script>
@endpush
