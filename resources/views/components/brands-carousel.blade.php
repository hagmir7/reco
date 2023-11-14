<div class="max-w-7xl w-full flex mx-auto items-center overflow-hidden">
    <div x-data="carousel()" x-init="init()" class="w-full relative group">
        <div x-ref="container"
             class="w-full md:px-12 grid grid-cols-2 md:flex flex-col justify-center md:justify-start lg:justify-center items-center md:items-start md:flex-row md:overflow-x-auto flex-nowrap snap-x md:space-x-6 space-y-4 md:space-y-0 no-scrollbar py-4">

            @foreach($brands as $brand)
                <div class="flex-auto flex-grow-0 flex-shrink-0">
                    <img class="w-56 rounded-lg lazy" data-src="{{ $brand->getFirstMediaUrl(config('shopper.system.storage.disks.uploads')) }}" alt="{{ $brand->name }}">
                </div>
            @endforeach

        </div>
        <div @click="scrollTo(prev)" x-show="prev !== null"
             class="block absolute top-1/2 left-[16px] text-2xl text-white bg-black w-12 aspect-square rounded-full hover:bg-primary-500 hover:text-black focus:bg-primary-500 focus:text-black transition-all duration-500 ease-in-out cursor-pointer flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M15 6l-6 6l6 6"></path>
            </svg>
        </div>
        <div @click="scrollTo(next)" x-show="next !== null"
             class="block absolute top-1/2 right-[16px] text-2xl text-white bg-black w-12 aspect-square rounded-full hover:bg-primary-500 hover:text-black focus:bg-primary-500 focus:text-black transition-all duration-500 ease-in-out cursor-pointer flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 6l6 6l-6 6"></path>
            </svg>
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
                    let sibling = list[0].previousElementSibling;

                    // If there is no previous sibling, get the last child
                    if (sibling === null) {
                        sibling = this.container.lastElementChild;
                    }

                    if (sibling instanceof HTMLElement) {
                        return sibling;
                    }

                    return null;
                },
                getNextElement(list) {
                    let sibling = list[list.length - 1].nextElementSibling;

                    // If there is no next sibling, get the first child
                    if (sibling === null) {
                        sibling = this.container.firstElementChild;
                    }

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
