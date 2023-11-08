<div x-data="{ mobileNavOpen: false }" x-init="mobileNavOpen = screen.width > 640">
    <div class="w-full z-50 bg-black shadow">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row px-6 py-4" :class="{ 'space-y-4': mobileNavOpen && screen.width < 640 }">
            <div class="w-full flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <x-application-logo class="absolute top-0 h-36 shadow-lg rounded-b-lg" />
                </div>

                <!-- Toggle Button -->
                <button class="sm:hidden" @click="mobileNavOpen = screen.width > 640 ? true : !mobileNavOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                    </svg>
                </button>

            </div>
            <!-- Menu -->
            <div>
                <ul class="flex flex-col items-center sm:flex-row" x-show="mobileNavOpen" x-cloak>
                    <x-site.nav-link href="{{ route('site.home') }}">{{ __("Home") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.about') }}">{{ __("About") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.products.index') }}">{{ __("Products") }}</x-site.nav-link>
                    <x-site.nav-link href="{{ route('site.services') }}">{{ __("Services") }}</x-site.nav-link>
                    <template x-if="screen.width > 640">
                        <livewire:nav-cart-manager />
                    </template>
                    <template x-if="screen.width <= 640">
                        <x-site.nav-link href="{{ route('site.checkout') }}">{{ __("Panier") }}</x-site.nav-link>
                    </template>
                </ul>
            </div>
        </div>
    </div>
</div>


