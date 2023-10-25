<div class="shadow rounded-b-2xl">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
        <!-- Logo -->
        <div>
            <x-application-logo class="w-24" />
        </div>

        <!-- Menu -->
        <div class="">
            <ul class="flex">
                <x-site.nav-link href="{{ route('site.home') }}">{{ __("Home") }}</x-site.nav-link>
                <x-site.nav-link href="{{ route('site.about') }}">{{ __("About") }}</x-site.nav-link>
                <x-site.nav-link href="{{ route('site.about') }}">{{ __("Products") }}</x-site.nav-link>
                <x-site.nav-link href="{{ route('site.about') }}">{{ __("Services") }}</x-site.nav-link>
                <x-site.nav-link href="{{ route('site.about') }}">{{ __("Cart") }}</x-site.nav-link>
            </ul>
        </div>
    </div>
</div>
