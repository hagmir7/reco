<div class="flex justify-center z-50">
    <div
        x-data="cart_dropdown"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
        class="relative font-semibold text-gray-100 hover:text-primary-500 hover:underline px-4 py-2"
    >
        <!-- Button -->
        <template x-if="screen.width > 640">
            <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button" class="flex items-center">
                {{ __("Panier") }}

                <span class="absolute top-0 right-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/4 translate-x-1/4 text-gray-900 bg-primary-500">
                    {{ \Cart::getTotalQuantity() }}
                </span>
            </button>
        </template>
        <template x-if="screen.width <= 640">
            <x-site.nav-link href="{{ route('site.checkout') }}">{{ __("Panier") }}</x-site.nav-link>
        </template>

        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-button')"
            style="display: none;"
            class="absolute right-0 mt-4 w-96 divide-y rounded-md bg-white shadow-md text-gray-900"
        >
            @if(!\Cart::getContent()->count())
                <div class="rounded-md overflow-hidden flex flex-col items-center pb-3">
                    <img src="/assets/images/cart/man-shopping.png" alt="cart empty image">
                    <div>Votre panier est vide! Ajoutez quelques articles!</div>
                </div>
            @else
                @foreach(\Cart::getContent() as $item)
                    <div class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                        <div class="w-full flex">
                            <div class="flex-[1_1_0]">
                                <div>{{ $item->name }}</div>
                                <div class="flex gap-2 items-center">
                                    <span class="text-primary-700">{{ shopper_money_format($item->price) }}</span>
                                    <span class="flex gap-2 items-center bg-primary-800 text-white px-1 rounded-lg">
                                        <button wire:click="addProductToCart({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                               <path d="M12 5l0 14"></path>
                                               <path d="M5 12l14 0"></path>
                                            </svg>
                                        </button>
                                        <span>x {{ $item->quantity }}</span>
                                        <button wire:click="minusProductFromCart({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                               <path d="M5 12l14 0"></path>
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center cursor-pointer" x-on:click="$wire.removeItem({{ $item->id  }})">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="px-4 py-4 flex flex-col gap-2">
                    <div class="w-full flex justify-between">
                        <span>SubTotal:</span> {{ shopper_money_format(\Cart::getSubTotal()) }}
                    </div>
                    <div class="w-full flex justify-between">
                        <span>Total:</span> {{ shopper_money_format(\Cart::getTotal()) }}
                    </div>
                    <div class="w-full mt-2">
                        <a href="{{ route('site.checkout') }}" class="w-full btn btn-sm bg-black text-white">Checkout</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('stacked_scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cart_dropdown', () => ({
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }))
        })
    </script>
@endpush
