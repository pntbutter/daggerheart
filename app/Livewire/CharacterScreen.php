<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Character;

class CharacterScreen extends Component
{
    public Character $character;

    public $items = [];

    public function deleteCharacter()
    {
        $this->character->delete();

        redirect()->to('/dashboard');
    }

    public function equipItem($type, $key)
    {
        $equip_type = match($type) {
            'armor' => 'equipped_armor',
            'primary' => 'equipped_primary',
            'secondary' => 'equipped_secondary',
            default => false,
        };

        if (!$equip_type) return false;

        $this->character->$equip_type = $key;

        if ($type === 'primary' && config('items')[$type][$key]['burden'] == 2) {
            $this->character->equipped_secondary = null;
        }

        if ($type === 'secondary' && $this->character->equipped_primary) {
            $primaryItemBurden = config('items')['primary'][$this->character->equipped_primary]['burden'];

            if ($primaryItemBurden === 2) {
                $this->character->equipped_primary = null;
            }
        }

        $this->character->save();
        
        $this->dispatch('equipment-updated');
    }

    public function unequipItem($type)
    {
        $equip_type = match($type) {
            'armor' => 'equipped_armor',
            'primary' => 'equipped_primary', 
            'secondary' => 'equipped_secondary',
            default => false,
        };

        if (!$equip_type) return false;

        $this->character->$equip_type = null;
        $this->character->save();
        
        $this->dispatch('equipment-updated');
    }

    public function mount()
    {
        $this->items = config('items');
    }

    public function render()
    {
        return view('livewire.character-screen');
    }
}
