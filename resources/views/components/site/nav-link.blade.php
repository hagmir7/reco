@props(['class' => '', 'href' => '#'])
<a href="{{ $href }}" @class(["font-semibold", $class , 'text-primary-500' => request()->fullUrl() == $href]) {{ $attributes }}>
    {{ $slot }}
</a>
