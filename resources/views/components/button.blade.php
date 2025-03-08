@props(['type' => 'button', 'skin' => 'primary'])

@php
    $css = 'py-3  px-6  rounded-full  border-2  uppercase  text-sm  tracking-wider  font-bold  cursor-pointer  transition';

    $css .= match($skin) {
        'warning' => 'border-red-700  bg-red-600  text-red-50  hover:border-red-800  hover:bg-red-700',
        default => 'border-stone-100  bg-gradient-to-tr  from-stone-300  to-stone-200  text-stone-800  hover:from-white  hover:to-white  hover:border-white  hover:text-stone-950',
    }
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $css]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $css]) }}>
        {{ $slot }}
    </button>
@endif
