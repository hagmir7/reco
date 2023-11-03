<div>
    <div class="w-full z-50 bg-gray-900 shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <div>
                <x-application-logo class="absolute top-0 h-36 shadow-lg rounded-b-lg" />
            </div>

            <!-- Menu -->
            <div class="">
                <ul class="flex" x-data="{ openCart: false }">
                    <x-site.nav-link href="{{ route('site.home') }}">{{ __("Home") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.about') }}">{{ __("About") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.products.index') }}">{{ __("Products") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.services') }}">{{ __("Services") }}</x-site.nav-link>
                    <x-site.nav-link href="#"
                                     x-data="cart"
                                     x-on:keydown.escape.prevent.stop="close($refs.button)"
                                     x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                     x-id="['dropdown-button']">

                        <button x-ref="button"
                            x-on:click="toggle()"
                            :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')"
                            type="button"
                            class="flex items-center p-0">
                            {{ __("Cart") }}

                            <span class="absolute top-0 right-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/4 translate-x-1/4 text-gray-900 bg-primary-500">
                                {{ \Jackiedo\Cart\Facades\Cart::name('panier')->sumItemsQuantity() }}
                            </span>
                        </button>
                        <div x-ref="panel"
                             x-show="open"
                             x-transition.origin.top.left
                             x-on:click.outside="close($refs.button)"
                             :id="$id('dropdown-button')"
                             class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mt-2 min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700" aria-labelledby="hs-dropdown-slideup-animation">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                Newsletter
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                Purchases
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                Downloads
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                                Team Account
                            </a>
                        </div>
                    </x-site.nav-link>
                </ul>

            </div>
        </div>
    </div>
</div>


