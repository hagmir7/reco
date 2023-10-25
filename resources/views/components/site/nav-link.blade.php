@props(['class' => '', 'href' => '#'])
<a href="{{ $href }}" @class(["font-semibold hover:text-primary-500 hover:underline px-4 py-4", $class , 'text-primary-500 underline' => request()->fullUrl() == $href]) {{ $attributes }}>
    {{ $slot }}
</a>
