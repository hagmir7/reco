@props(['href' => '#', 'title' => ''])
<a href="{{ $href }}" class="card shadow-[-7px_5px_18px_2px_rgba(0,0,0,0.12)] rounded-lg hover:cursor-pointer h-full">
    <div class="h-full flex flex-col justify-between gap-8">
        <div class="flex justify-end">
            {{ $image }}
        </div>
        <div class="flex flex-col gap-2">
            <h3 class="text-3xl font-bold">{{ $title }}</h3>
            <p>{{ $description ?? ''}}</p>
        </div>
        <div class="flex justify-end items-end">
            {{ $icon ?? ''}}
        </div>
    </div>
</a>
