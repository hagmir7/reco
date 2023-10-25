<div>
    <img {{ $attributes->merge(['class' => 'dark:hidden']) }} src="{{ config('shopper.system.logo') }}" alt="{{ config('app.name') }}" />
    <img {{ $attributes->merge(['class' => 'hidden dark:inline']) }} src="{{ config('shopper.system.logo_white') }}" alt="{{ config('app.name') }}" />
</div>
