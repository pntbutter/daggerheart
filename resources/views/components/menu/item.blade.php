@props(['type' => 'button'])

@php
    $css = 'flex  items-center  gap-2  w-full  px-2  py-1  text-sm  cursor-pointer  transition  hover:bg-white/3  focus:outline-none  focus:bg-white/3';

    $merge = [
        'x-on:click' => 'open = false',
        'class' => $css,
    ];
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge($merge) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge($merge) }}>
        {{ $slot }}
    </button>
@endif
