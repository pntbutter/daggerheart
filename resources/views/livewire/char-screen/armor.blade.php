<div class="flex">
    <div class="flex  flex-col  items-center  justify-center  gap-1  p-4  bg-stone-700  rounded-l-xl">
        <span class="text-sm  opacity-75">Armor</span>
        <span class="text-3xl  font-bold">{{ $character->armorScore }}</span>
    </div>

    <div class="flex  flex-col  items-center  justify-center  gap-1  p-4  border-2  border-l-0  border-stone-700  rounded-r-xl">
        <div @class([
            'grid  gap-1',
            'grid-cols-3' => $character->max_armor >= 6,
            'grid-cols-4' => $character->max_armor > 6,
        ])>
            @for ($i = 0; $i < $character->max_armor; $i++)
                <button type="button" wire:click="setArmor({{ $i + 1 }})" class="grid  place-content-center  size-6  border-2  border-current  rounded  cursor-pointer">
                    @if ($character->armor > $i)
                        <span class="size-3  bg-current  rounded"></span>
                    @endif
                </button>
            @endfor
        </div>
    </div>
</div>
