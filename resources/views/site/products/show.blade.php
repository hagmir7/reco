<x-site-layout>
    <div class="grid grid-cols-2 min-h-screen mt-12">
        <div class="flex flex-col items-center justify-center">
            <div @class(["grid", "grid-cols-2" => $product->media_count > 1])>
                @foreach($product->getMedia(config('shopper.system.storage.disks.uploads')) as $media)
                    <img src="{{ $media->getUrl() }}" alt="{{ $product->name }} image">
                @endforeach
            </div>
        </div>

        <div class="min-h-screen">
            <div class="max-w-xl mx-auto flex flex-col pt-44">
                <div class="flex justify-between">
                    <h2 class="font-bold">{{ $product->name }}</h2>
                    <span>{{ $product->formattedPrice }}</span>
                </div>
                <div>
                    {{ $product->description }}
                </div>
                <div>
                    <livewire:add-product-to-cart :slug="$product->slug" />
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-topBottom py-10 my-20">
        <div class="max-w-6xl mx-auto flex flex-col items-center space-y-10">
            <h2 class="text-3xl font-bold">Featured products</h2>

            <x-alpine-carousel >
                @foreach($featured_products as $product)
                    <a href="#"
                       class="block ml-4 flex-auto flex-grow-0 flex-shrink-0 w-56 rounded-lg items-center justify-center snap-center overflow-hidden">
                        <div>
                            <img src="{{ $product->getFirstMediaurl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $product->name }} image">
                        </div>
                        <div class="px-2 py-3 flex justify-between">
                            <div class="text-lg font-semibold">{{ $product->name }}</div>
                        </div>
                    </a>
                @endforeach
            </x-alpine-carousel>

            <a class="btn bg-black text-white shadow-md px-12" href="#">{{ __("Voir plus") }}</a>
        </div>
    </div>

</x-site-layout>
