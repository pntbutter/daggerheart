<div>
    <div class="flex  items-center  justify-between  gap-6">
        <div class="flex  items-center  gap-4">
            <h1 class="text-4xl  font-bold">
                {{ $character->name }}
            </h1>

            <span class="px-3.5  py-2.5  rounded-lg  bg-stone-900  text-2xl  leading-none  font-extrabold">
                {{ $character->level }}
            </span>
        </div>

        <div class="flex  flex-wrap  gap-10">
            <div class="flex  flex-col">
                Class
                <strong class="text-lg">
                    {{ $character->className }}
                </strong>
            </div>
    
            <div class="flex  flex-col">
                Subclass
                <strong class="text-lg">
                    {{ $character->subClassName }}
                </strong>
            </div>
    
            <div class="flex  flex-col">
                Heritage
                <strong class="text-lg">
                    {{ $character->heritage }}
                </strong>
            </div>
        </div>
    </div>

    <hr class="border-t-2  border-stone-600  my-6">

    <div class="flex  items-center  justify-between">
        <div class="flex  items-center  gap-6">
            <div class="flex  flex-col  items-center  justify-center  gap-1  p-4  bg-stone-700  rounded-xl">
                <span class="text-sm  opacity-75">Evasion</span>
                <span class="text-3xl  font-bold">{{ $character->evasion }}</span>
            </div>
            
            <livewire:char-screen.armor :$character />
        </div>

        <div class="flex  flex-wrap  gap-6">
            <x-char-screen.trait name="Agility" :value="$character->modified_agility" />
            <x-char-screen.trait name="Strength" :value="$character->modified_strength" />
            <x-char-screen.trait name="Finesse" :value="$character->modified_finesse" />
            <x-char-screen.trait name="Instinct" :value="$character->modified_instinct" />
            <x-char-screen.trait name="Presence" :value="$character->modified_presence" />
            <x-char-screen.trait name="Knowledge" :value="$character->modified_knowledge" />
        </div>
    </div>

    <div class="mt-24">
        <livewire:char-screen.inventory :$character />
    </div>

    <div class="mt-40">
        <button 
            type="button" 
            wire:click="deleteCharacter" 
            wire:confirm="Are you sure you want to permanently delete the character?" 
            class="cursor-pointer"
        >
            Delete character
        </button>
    </div>
</div>
