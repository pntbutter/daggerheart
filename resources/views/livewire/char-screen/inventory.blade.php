<div x-data="{ open: false }">
    
    <header class="flex  items-center  justify-between  mb-6">
        <h2 class="text-2xl  font-bold">Inventory</h2>

        <x-button @click="open = true">
            Add item
        </x-button>
    </header>

    <!-- Items -->
    <table class="w-full  text-sm">
        <thead>
            <x-table.th>Name</x-table.th>
            <x-table.th>Feature</x-table.th>
            <x-table.th>#</x-table.th>
            <x-table.th class="w-0"></x-table.th>
        </thead>
        @foreach($character->items as $item)
            <tr class="border-b-2  border-stone-700">
                <x-table.td title="Type: {{ $item->item_type->label() }}">
                    {{ $item->name }}
                    @if ($item->equipped)
                        (equipped)
                    @endif
                </x-table.td>
                <x-table.td>{!! Str::markdown($item->feature) !!}</x-table.td>
                <x-table.td>{{ $item->quantity }}</x-table.td>
                <x-table.td>
                    <x-menu>
                        <x-menu.button>
                            <x-icon.ellipsis class="size-8  p-1  rounded  hover:bg-stone-900" />
                        </x-menu.button>

                        <x-menu.items anchor="bottom-end">
                            @if ($item->equipped)
                                <x-menu.item wire:click="$parent.unequipItem('{{ $item->item_type->value }}')">Unequip</x-menu.item>
                            @else
                                @if ($item->equippable)
                                    <x-menu.item wire:click="$parent.equipItem('{{ $item->item_type->value }}', '{{ $item->item_key }}')">Equip</x-menu.item>
                                @endif

                                @if ($item->quantity === 1)
                                    <x-menu.item wire:click="deleteItem('{{ $item->id }}')">Delete</x-menu.item>
                                @else
                                    <x-menu.item wire:click="deleteItem('{{ $item->id }}')">Delete one</x-menu.item>
                                    <x-menu.item wire:click="deleteItem('{{ $item->id }}', true)">Delete all</x-menu.item>
                                @endif
                            @endif

                            <x-menu.divider />

                            <x-menu.close>Close</x-menu.close>
                        </x-menu.items>
                    </x-menu>
                </x-table.td>
            </tr>
        @endforeach
    </table>

    <!-- Modal -->
    <div 
        x-show="open" 
        x-cloak 
        x-transition.opacity
        x-trap.inert.noscroll="open" 
        @keydown.escape="open = false"
        class="fixed  z-40  inset-0  overflow-auto  flex  items-start  justify-center  p-6"
    >
        <div x-show="open" x-transition.origin.top class="relative  z-10  w-full  max-w-7xl  p-12  rounded-xl  bg-stone-800">
            <header class="flex  items-center  justify-between  mb-8">
                <h2 class="text-3xl  font-bold">Add item:</h2>

                <x-menu>
                    <x-menu.button>
                        <span class="flex  items-center  gap-2  px-4  py-2  bg-stone-900  rounded-full  text-sm  hover:bg-stone-950">
                            @itemtype($type)
                            <x-icon.chevron-down class="size-4" />
                        </span>
                    </x-menu.button>

                    <x-menu.items anchor="bottom-end">
                        @foreach ($items as $key => $category)
                            <x-menu.item wire:click="changeType('{{ $key }}')" @class(['bg-white/3' => $key === $type])>
                                @itemtype($key)
                            </x-menu.item>
                        @endforeach
                    </x-menu.items>
                </x-menu>
            </header>

            <x-char-screen.add-item-modal-table :items="$items" :type="$type" />
        </div>

        <button type="button" @click="open = false" class="absolute  inset-0  bg-stone-900/75  focus:outline-none"></button>
    </div>
</div>
