<x-site-layout>
    <div class="grid lg:grid-cols-2 mt-12">
        <div @class(["w-full flex overflow-x-auto no-scrollbar snap-x snap-mandatory lg:grid justify-items-center", "lg:grid-cols-2" => $product->media_count > 2])>
            @foreach($product->getMedia(config('shopper.system.storage.disks.uploads')) as $media)
                <img class="max-w-md w-full snap-center scroll-ml-4" src="{{ $media->getUrl() }}" alt="{{ $product->name }} image">
            @endforeach
        </div>

        <div class="max-w-3xl mx-auto px-8 flex flex-col pt-4 lg:pt-44 space-y-6">
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold">{{ $product->name }}</h2>
                <span>{{ $product->formattedPrice }}</span>
            </div>

            <div>
                <livewire:add-product-to-cart :slug="$product->slug" />
            </div>

            <div>
                {!! $product->description !!}
            </div>
        </div>
    </div>

    <div class="shadow-topBottom py-10 my-20">
        <div class="max-w-6xl mx-auto px-4 flex flex-col items-center space-y-10">
            <h2 class="text-3xl font-bold">Featured products</h2>

            <x-alpine-carousel >
                @foreach($featured_products as $product)
                    <x-product-card :product="$product" class="w-80 snap-center" />
                @endforeach
            </x-alpine-carousel>
            <a class="btn bg-black text-white shadow-md px-12" href="#">{{ __("Voir plus") }}</a>
        </div>
    </div>

</x-site-layout>
