<?php

namespace App\Livewire\CharScreen;

use Livewire\Component;
use App\Models\Character;
use App\Models\Item;
use Livewire\Attributes\On;

class Inventory extends Component
{
    public Character $character;

    public $type = 'consumable';

    public function changeType($type)
    {
        $this->type = $type;
    }

    #[On('equipment-updated')]
    public function refreshCharacter()
    {
        $this->character->refresh();
    }

    public function addItem($key)
    {
        $existingItem = Item::where([
            'character_id' => $this->character->id,
            'item_type' => $this->type,
            'item_key' => $key
        ])->first();

        if ($existingItem) {
            $existingItem->increment('quantity');
        } else {
            Item::create([
                'character_id' => $this->character->id,
                'item_type' => $this->type,
                'item_key' => $key
            ]);
        }
    }

    public function deleteItem($id, $deleteAll = false)
    {
        $item = Item::findOrFail($id);
        if ($deleteAll || $item->quantity <= 1) {
            $item->delete();
        } else {
            $item->decrement('quantity');
        }
    }

    public function render()
    {
        return view('livewire.char-screen.inventory', [
            'items' => config('items'),
        ]);
    }
}
