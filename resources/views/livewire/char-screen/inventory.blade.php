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
            <x-table.th>Type</x-table.th>
            <x-table.th>Feature</x-table.th>
            <x-table.th>#</x-table.th>
            <x-table.th class="w-0"></x-table.th>
        </thead>
        @foreach($character->items as $item)
            <tr class="border-b-2  border-stone-700">
                <x-table.td>
                    {{ $item->name }}
                    @if ($item->equipped)
                        (equipped)
                    @endif
                </x-table.td>
                <x-table.td>{{ $item->item_type->label() }}</x-table.td>
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
                                <x-menu.item wire:click="$parent.equipItem('{{ $item->item_type->value }}', '{{ $item->item_key }}')">Equip</x-menu.item>

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

                <div class="flex  gap-6">
                    @foreach ($items as $key => $category)
                        <button
                            type="button" 
                            wire:click="changeType('{{ $key }}')"
                            @class([
                                'px-4  py-2  rounded-full  border-2  cursor-pointer  hover:decoration-current',
                                'border-current' => $key == $type,
                                'border-stone-700' => $key != $type,
                            ])
                        >
                            @itemtype($key)
                        </button>
                    @endforeach
                </div>
            </header>

            <table class="w-full  text-sm">
                <thead>
                    <tr class="border-b-2  border-stone-700">
                        <x-table.th>Name</x-table.th>
                        @if ($type !== 'armor')
                            <x-table.th>Trait</x-table.th>
                            <x-table.th>Range</x-table.th>
                        @endif
                        <x-table.th>Feature</x-table.th>
                        @if ($type !== 'armor')
                            <x-table.th>Damage</x-table.th>
                            <x-table.th textalign="center">Type</x-table.th>
                            <x-table.th textalign="center">Burden</x-table.th>
                        @endif
                        @if ($type === 'armor')
                            <x-table.th textalign="center">Base score</x-table.th>
                        @endif
                        <th class="w-0"></th>
                    </tr>
                </thead>
                @foreach ($items[$type] as $item_id => $item)
                    <tr class="border-t  border-stone-700  hover:bg-stone-700">
                        <x-table.td>{{ $item['name'] }}</x-table.td>
                        @if ($type !== 'armor')
                            <x-table.td>{{ $item['trait'] }}</x-table.td>
                            <x-table.td>{{ $item['range'] }}</x-table.td>
                        @endif
                        <x-table.td>{!! Str::markdown($item['feature']) !!}</x-table.td>
                        @if ($type !== 'armor')
                            <x-table.td>{{ $item['dmg'] }}</x-table.td>
                            <x-table.td>
                                @if ($item['dmg_type'] === 'phy')
                                    <x-icon.sword class="mx-auto" />
                                @else
                                    <x-icon.sparkles class="mx-auto" />
                                @endif
                            </x-table.td>
                            <x-table.td>
                                @if ($item['burden'] === 1)
                                    <x-icon.sword title="One-handed" class="mx-auto" />
                                @else
                                    <x-icon.swords title="Two-handed" class="mx-auto" />
                                @endif
                            </x-table.td>
                        @endif
                        @if ($type === 'armor')
                            <x-table.td class="text-center">{{ $item['base_score'] }}</x-table.td>
                        @endif
                        <x-table.td>
                            <button 
                                type="button" 
                                wire:click="addItem('{{ $item_id }}'); open = false"
                                class="px-2.5  py-1.5  rounded-full  text-xs  uppercase  font-medium  tracking-widest  whitespace-nowrap  cursor-pointer  hover:bg-stone-800"
                            >
                                Add item
                            </button>
                        </x-table.td>
                    </tr>    
                @endforeach
            </table>
        </div>

        <button type="button" @click="open = false" class="absolute  inset-0  bg-stone-900/75  focus:outline-none"></button>
    </div>
</div>
