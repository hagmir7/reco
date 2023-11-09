<a class="block" href="/">
    <img {{ $attributes->merge(['class' => 'dark:hidden']) }} src="{{ config('shopper.system.logo-dark-svg') }}" alt="{{ config('app.name') }}" />
    <img {{ $attributes->merge(['class' => 'hidden dark:inline']) }} src="{{ config('shopper.system.logo-dark-svg') }}" alt="{{ config('app.name') }}" />
</a>
