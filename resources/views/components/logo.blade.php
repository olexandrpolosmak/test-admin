@props([
    'imageAlignment' => 'left',
])
@php
    $imageAlignmentClass = match ($imageAlignment) {
        'left' => 'gap-2',
        default => 'flex-col items-center',
    };
@endphp
<div class="{{$imageAlignmentClass}} flex text-center">
    <img src="{{ asset('images/dots-icon-64.png') }}"
         class="h-8 mr-3 rounded-lg"
         alt="Dots Logo">
    <span class="self-center text-truncate text-ellipsis overflow-hidden max-w-[200px] text-xl font-semibold hidden lg:inline whitespace-nowrap dark:text-white">Dots Platform</span>
</div>

