<nav 
    x-data="{ open: false }" 
    x-on:click.outside="open = false" 
    {{ $attributes->merge(['class' => '']) }}
>
    {{ $slot }}
</nav>
