<div class="max-w-7xl flex mx-auto items-center">
    <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
        <div x-ref="container"
             class="md:-ml-4 md:flex md:overflow-x-scroll scroll-snap-x md:space-x-16 space-y-4 md:space-y-0 no-scrollbar">

            {{ $slot }}

{{--            @foreach($products as $product)--}}
{{--                <div--}}
{{--                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-56 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">--}}
{{--                    <div>--}}
{{--                        <img src="{{ $product->getFirstMediaurl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $product->name }} image">--}}
{{--                    </div>--}}
{{--                    <div class="px-2 py-3 flex justify-between">--}}
{{--                        <div class="text-lg font-semibold">{{ $product->name }}</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

        </div>
        <div @click="scrollTo(prev)" x-show="prev !== null"
             class="block absolute top-1/2 left-0 bg-white p-2 rounded-full cursor-pointer">
            <div>&lt;</div>
        </div>
        <div @click="scrollTo(next)" x-show="next !== null"
             class="block absolute top-1/2 right-0 bg-white p-2 rounded-full cursor-pointer">
            <div>&gt;</div>
        </div>
    </div>
</div>

@push('stacked_scripts')
    <script>
        window.carousel = function () {
            return {
                container: null,
                prev: null,
                next: null,
                init() {
                    this.container = this.$refs.container

                    this.update();

                    this.container.addEventListener('scroll', this.update.bind(this), {passive: true});
                },
                update() {
                    const rect = this.container.getBoundingClientRect();

                    const visibleElements = Array.from(this.container.children).filter((child) => {
                        const childRect = child.getBoundingClientRect()

                        return childRect.left >= rect.left && childRect.right <= rect.right;
                    });

                    if (visibleElements.length > 0) {
                        this.prev = this.getPrevElement(visibleElements);
                        this.next = this.getNextElement(visibleElements);
                    }
                },
                getPrevElement(list) {
                    const sibling = list[0].previousElementSibling;

                    if (sibling instanceof HTMLElement) {
                        return sibling;
                    }

                    return null;
                },
                getNextElement(list) {
                    const sibling = list[list.length - 1].nextElementSibling;

                    if (sibling instanceof HTMLElement) {
                        return sibling;
                    }

                    return null;
                },
                scrollTo(element) {
                    const current = this.container;

                    if (!current || !element) return;

                    const nextScrollPosition =
                        element.offsetLeft +
                        element.getBoundingClientRect().width / 2 -
                        current.getBoundingClientRect().width / 2;

                    current.scroll({
                        left: nextScrollPosition,
                        behavior: 'smooth',
                    });
                }
            };
        }
    </script>
@endpush
