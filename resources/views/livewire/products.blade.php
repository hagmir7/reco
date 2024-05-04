<!-- Products -->
<div class="flex justify-center py-10">
    <div>
        <h3 class="text-center mb-4 text-3xl font-bold text-[#BF9000]">Découvrez nos sacs</h3>
        <div class="d-flx mt-5">
            @foreach ($categories as $category)
                <a href="" class="py-1 px-5 bg-[#BF9000] text-white rounded font-bold text-lg">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>


<!-- Slider main container -->
<div class="swiper-container my-10 sm:p-0 p-3">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper flex items-center mb-16 gap-4">
        <!-- Slides -->
        @foreach ($products as $product)
            <div class="swiper-slide relative">
                <img class="w-full h-full transition-all duration-1000 rounded-xl drop-shadow-xl"
                    src="{{ $product->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="">
                <a href="{{ route('site.products.show', $product->slug) }}" class="absolute py-1 px-5 bg-[#BF9000] text-white rounded font-bold text-lg">Commander</a>
            </div>
        @endforeach

        {{-- <div class="swiper-slide relative">
            <img class="w-full h-full transition-all duration-1000 rounded-xl drop-shadow-xl" src="/assets/images/new/product-2.png"
                alt="">
            <button class="absolute py-1 px-5 bg-[#BF9000] text-white rounded font-bold text-lg">Commander</button>
        </div>
        <div class="swiper-slide relative">
            <img class="w-full h-full transition-all duration-1000 rounded-xl drop-shadow-xl" src="/assets/images/new/product-3.png"
                alt="">
            <button class="absolute py-1 px-5 bg-[#BF9000] text-white rounded font-bold text-lg">Commander</button>
        </div> --}}
    </div>

</div>
