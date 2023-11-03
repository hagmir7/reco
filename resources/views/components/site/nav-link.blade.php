@props(['class' => '', 'href' => '#'])
<a href="{{ $href }}" @class(["relative font-semibold text-gray-100 hover:text-primary-500 hover:underline px-4 py-2", $class , 'text-primary-500 underline' => request()->fullUrl() == $href]) {{ $attributes }}>
    {{ $slot }}
</a>
