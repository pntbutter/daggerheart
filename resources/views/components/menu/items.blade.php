@props(['anchor' => 'bottom-start', 'offset' => 2])

@php
    if (!in_array($anchor, [
        'bottom', 'bottom-start', 'bottom-end',
        'top', 'top-start', 'top-end',
        'left', 'left-start', 'left-end',
        'right', 'right-start', 'right-end',
    ])) {
        $anchor = 'bottom-start';
    }

    $origin = match($anchor) {
        'bottom' => 'top',
        'bottom-start' => 'top-right',
        'bottom-end' => 'top-left',
        'top' => 'bottom',
        'top-start' => 'bottom-right',
        'top-end' => 'bottom-left',
        'left' => 'right',
        'left-start' => 'right-bottom',
        'left-end' => 'right-top',
        'right' => 'left',
        'right-start' => 'left-bottom',
        'right-end' => 'left-top',
    };
@endphp

<div 
    x-show="open" 
    x-cloak 
    x-transition.origin.{{ $origin }}
    x-anchor.{{ $anchor }}.offset.{{ $offset }}="$refs.button"
    class="min-w-40  py-1  rounded-lg  bg-stone-900  shadow-xl"
>
    {{ $slot }}
</div>
