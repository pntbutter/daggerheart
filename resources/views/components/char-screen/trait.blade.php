@props(['name', 'value'])

<div class="relative  flex  items-center  justify-center  size-22  pt-3  bg-stone-900  rounded-xl  shadow-xl  text-center">
    <span class="absolute  inset-x-0  top-2  text-xs  opacity-75">{{ $name }}</span>
    <span class="text-3xl  font-bold">{{ $value > 0 ? '+' : '' }}{{ $value }}</span>
</div>
