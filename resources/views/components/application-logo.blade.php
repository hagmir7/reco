<a class="block" href="/">
    <img {{ $attributes->merge(['class' => 'dark:hidden']) }} src="{{ config('shopper.system.logo-sm') }}" alt="{{ config('app.name') }}" />
    <img {{ $attributes->merge(['class' => 'hidden dark:inline']) }} src="{{ config('shopper.system.logo-dark-sm') }}" alt="{{ config('app.name') }}" />
</a>
