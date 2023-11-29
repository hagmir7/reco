<div @class(["w-full flex flex-col md:grid gap-10 lg:gap-20", "grid-cols-2" => \Cart::getContent()->count()])>
    <!-- Panel -->
    @if(!\Cart::getContent()->count())
        <div class="rounded-md overflow-hidden flex flex-col items-center pb-3 space-y-4">
            <img src="/assets/images/cart/man-shopping.png" alt="cart empty image">
            <div>{{ __("Votre panier est vide! Ajoutez quelques articles!") }}</div>
            <a href="{{ route('site.products.index') }}" class="btn btn-sm bg-black text-white flex gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l14 0"></path>
                    <path d="M5 12l6 6"></path>
                    <path d="M5 12l6 -6"></path>
                </svg>
                {{ __("Allez aux produits!") }}
            </a>
        </div>
    @else
        <div class="divide-y rounded-md text-gray-900 border">
            @foreach(\Cart::getContent() as $item)
                <div class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                    <div class="w-full flex">
                        <div class="flex-[1_1_0]">
                            <div>{{ $item->name }}</div>
                            <div class="flex gap-2 items-center">
                                <span class="text-primary-800">{{ shopper_money_format($item->price) }}</span>
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
            </div>
        </div>

        <div class="w-full mt-2 space-y-4">
            <h2 class="text-xl lg:text-2xl text-center md:text-start font-bold">{{ __("Informations de contact") }}</h2>
            <form class="space-y-4">
                <x-input wire:model.defer="last_name" label="{{ __("Nom") }}" placeholder="{{ __("Votre Nom") }}" required />

                <x-input wire:model.defer="first_name" label="{{ __("Prénom") }}" placeholder="{{ __("Votre Prénom") }}" required />

                <x-input type="email" wire:model.defer="email" label="{{ __("E-mail") }}" placeholder="{{ __("Votre adresse e-mail") }}" required />

                <x-inputs.phone wire:model.defer="phone_number" label="{{ __("Numéro téléphone") }}" mask="['## ####-####']" placeholder="0 5/6/7/8 xx xx xx xx" required />

                <x-input wire:model.defer="address" label="{{ __("Adresse") }}" placeholder="{{ __("Votre Adresse") }}" required />
            </form>

            <button wire:click="checkout" class="btn btn-sm bg-black text-white">{{ __("Checkout") }}</button>
        </div>
    @endif
</div>
