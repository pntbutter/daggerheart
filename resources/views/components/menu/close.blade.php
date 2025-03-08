<button 
    x-on:click="open = false" 
    {{ $attributes->merge(['class' => 'flex  items-center  gap-2  w-full  px-2  py-1  text-sm  cursor-pointer  transition  hover:bg-white/3  focus:outline-none  focus:bg-white/3']) }}
>
    {{ $slot }}
</span>
