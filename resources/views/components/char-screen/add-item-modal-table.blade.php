@props(['items' => [], 'type'])

<table class="w-full  text-sm">
    
    <thead>
        <tr class="border-b-2  border-stone-700">
            <x-table.th>Name</x-table.th>

            @if ($type === 'primary' || $type === 'secondary')
                <x-table.th>Trait</x-table.th>
                <x-table.th>Range</x-table.th>
            @endif

            <x-table.th>Feature</x-table.th>

            @if ($type === 'primary' || $type === 'secondary')
                <x-table.th>Damage</x-table.th>
                <x-table.th textalign="center">Type</x-table.th>
            @endif

            @if ($type === 'primary')
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

            @if ($type === 'primary' || $type === 'secondary')
                <x-table.td>{{ $item['trait'] }}</x-table.td>
                <x-table.td>{{ $item['range'] }}</x-table.td>
            @endif

            <x-table.td>{!! Str::markdown($item['feature']) !!}</x-table.td>

            @if ($type === 'primary' || $type === 'secondary')
                <x-table.td>{{ $item['dmg'] }}</x-table.td>
                <x-table.td>
                    @if ($item['dmg_type'] === 'phy')
                        <x-icon.sword class="mx-auto" />
                    @else
                        <x-icon.sparkles class="mx-auto" />
                    @endif
                </x-table.td>
            @endif

            @if ($type === 'primary')
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
