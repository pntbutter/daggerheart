@props(['heading', 'back', 'back_slug'])

<div {{ $attributes->merge(['class' => 'pt-12']) }}>
    @if ($back && $back_slug)
        <button type="button" @click="$wire.step = '{{ $back_slug }}'; $wire.$refresh()" class="inline-flex  items-center  gap-1  text-xs  opacity-50  cursor-pointer  transition  hover:opacity-75">
            <x-icon.arrow-left class="size-4" />
            {{ $back }}
        </button>
    @endif

    @if ($heading)
        <h2 class="mt-2  text-2xl  font-bold">
            {{ $heading }}
        </h2>
    @endif

    <p class="mt-2  prose  prose-sm  prose-invert">
        {{ $slot }}
    </p>
</div>
