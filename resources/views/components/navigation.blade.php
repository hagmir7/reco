<div class="shadow">
    <div class="max-w-7xl mx-auto flex justify-between px-6 py-4">
        <!-- Logo -->
        <div>
            <x-application-logo />
        </div>

        <!-- Menu -->
        <div class="">
            <ul class="flex gap-6">
                <x-site.nav-link>{{ __("Home") }}</x-site.nav-link>
                <x-site.nav-link>{{ __("About") }}</x-site.nav-link>
                <x-site.nav-link>{{ __("Products") }}</x-site.nav-link>
                <x-site.nav-link>{{ __("Services") }}</x-site.nav-link>
                <x-site.nav-link>{{ __("Cart") }}</x-site.nav-link>
            </ul>
        </div>
    </div>
</div>
