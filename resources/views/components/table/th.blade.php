@props(['textalign' => 'left'])

@php
    $align_css = match($textalign) {
        'center' => 'text-center',
        'right' => 'text-right',
        default => 'text-left',
    }
@endphp

<th {{ $attributes->merge(['class' => 'px-2  py-1  ' . $align_css]) }}>
    {{ $slot }}
</th>
