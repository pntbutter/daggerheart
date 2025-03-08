@props(['name'])

@error($name)
    <div class="text-red-400  opacity-75">{{ $message }}</div>
@enderror
