<div class="flex justify-center z-50">
    <div
        x-data="cart_dropdown"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
        class="relative font-semibold text-gray-100 hover:text-primary-500 hover:underline px-4 py-2"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('dropdown-button')"
            type="button"
            class="flex items-center"
        >
            {{ __("Cart") }}

            <span  @updated-cart.window="updatedCart(event.detail)"
                   x-text="items_count"
                   class="absolute top-0 right-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/4 translate-x-1/4 text-gray-900 bg-primary-500">
                                </span>
        </button>

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
            <template x-if="!Object.keys(items).length">
                <div class="rounded-md overflow-hidden flex flex-col items-center pb-3">
                    <img src="/assets/images/cart/man-shopping.png" alt="cart empty image">
                    <div>Votre panier est vide! Ajoutez quelques articles!</div>
                </div>
            </template>

            <template x-for="item in items">
                <div class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                    <div class="w-full flex">
                        <div class="flex-[1_1_0]">
                            <div x-text="item.name"></div>
                            <div class="flex gap-2">
                                <span><span x-text="item.price"></span>Dhs</span>
                                <span>x <span x-text="item.quantity"></span></span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" @click="$wire.removeItem(item.id)" class="cursor-pointer text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10l4 4m0 -4l-4 4"></path>
                                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </template>

            <div class="px-4 py-2 flex flex-col gap-2">
                <div class="w-full flex justify-between"><span>SubTotal:</span> <span x-text="cart_subtotal"></span></div>
                <div class="w-full flex justify-between"><span>Total:</span> <span x-text="cart_total"></span></div>
                <div class="w-full flex justify-end"><button class="btn bg-black text-white">Checkout</button></div>
            </div>
        </div>
    </div>
</div>

@push('stacked_scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cart_dropdown', () => ({
                open: false,
                items_count: {{ \Cart::getTotalQuantity() }},
                items: @json(\Cart::getContent()),
                cart_subtotal: 0,
                cart_total: 0,
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
                },
                updatedCart(eventDetail){
                    this.items_count = eventDetail.cartTotalQuantity;
                    this.items = eventDetail.items;
                    this.cart_subtotal = {{ \Cart::getSubTotal() }};
                    this.cart_total = {{ \Cart::getTotal() }};
                }
            }))
        })
    </script>
@endpush
