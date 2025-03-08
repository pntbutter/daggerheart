@props(['label' => ''])

<label class="flex  flex-col  group">
    @if ($label)
        <span class="text-xl  font-bold  text-stone-400  transition  group-has-focus:text-stone-200">{{ $label }}</span>
    @endif

    {{ $slot }}
</label>
