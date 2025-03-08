<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Character;

class CreateCharacter extends Component
{
    #[Validate('required', message: 'Need an epic name for an epic adventure my duder.')]
    public string $name;

    public string $class = '';
    public string $sub_class = '';
    public string $ancestry = '';
    public string $community = '';

    public int|null $agility = null;
    public int|null $strength = null;
    public int|null $finesse = null;
    public int|null $instinct = null;
    public int|null $presence = null;
    public int|null $knowledge = null;

    public $step = 'intro';
    public $classes = [];
    public $ancestries = [];
    public $communities = [];

    public function mount()
    {
        $this->classes = config('classes');
        $this->ancestries = config('ancestries');
        $this->communities = config('communities');
    }

    public function create()
    {
        $this->validate();

        $character = Character::create([
            'name' => $this->name,
            'class' => $this->class,
            'sub_class' => $this->sub_class,
            'ancestry' => $this->ancestry,
            'community' => $this->community,
            'agility' => $this->agility,
            'strength' => $this->strength,
            'finesse' => $this->finesse,
            'instinct' => $this->instinct,
            'presence' => $this->presence,
            'knowledge' => $this->knowledge,
        ]);

        return redirect()->route('character.show', $character);
    }

    public function render()
    {
        return view('livewire.create-character');
    }
}
