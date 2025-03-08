<?php

namespace App\Livewire\CharScreen;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Character;

class Armor extends Component
{
    public Character $character;

    public function setArmor($val)
    {
        if ($this->character->armor == $val) {
            $this->character->armor = $this->character->armor - 1;
        } else {
            $this->character->armor = $val;
        }

        $this->character->save();
    }

    #[On('equipment-updated')]
    public function refreshCharacter()
    {
        $this->character->refresh();
    }

    public function render()
    {
        return view('livewire.char-screen.armor');
    }
}
