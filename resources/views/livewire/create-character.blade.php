<div>
    @if ($step === 'intro')
        <div class="min-h-screen  flex  flex-col  items-start  justify-center  gap-8  py-12">
            <h1 class="text-4xl  font-bold">Create your character</h1>

            <div class="max-w-prose  text-stone-300">
                <p class="">The time has come to forge your legend! Choose your path wisely and create a hero worthy of epic tales. In this world of magic and mystery, your choices will shape not only your destiny, but the fate of those around you. Will you be remembered as a valiant warrior, a cunning spellcaster, or perhaps something entirely unique?</p>

                <p class="flex  items-center  gap-2  mt-2">
                    The chronicles of your adventures begin here - make them count.
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wand-sparkles"><path d="m21.64 3.64-1.28-1.28a1.21 1.21 0 0 0-1.72 0L2.36 18.64a1.21 1.21 0 0 0 0 1.72l1.28 1.28a1.2 1.2 0 0 0 1.72 0L21.64 5.36a1.2 1.2 0 0 0 0-1.72"/><path d="m14 7 3 3"/><path d="M5 6v4"/><path d="M19 14v4"/><path d="M10 2v2"/><path d="M7 8H3"/><path d="M21 16h-4"/><path d="M11 3H9"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-castle"><path d="M22 20v-9H2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2Z"/><path d="M18 11V4H6v7"/><path d="M15 22v-4a3 3 0 0 0-3-3a3 3 0 0 0-3 3v4"/><path d="M22 11V9"/><path d="M2 11V9"/><path d="M6 4V2"/><path d="M18 4V2"/><path d="M10 4V2"/><path d="M14 4V2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sword"><polyline points="14.5 17.5 3 6 3 3 6 3 17.5 14.5"/><line x1="13" x2="19" y1="19" y2="13"/><line x1="16" x2="20" y1="16" y2="20"/><line x1="19" x2="21" y1="21" y2="19"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-venetian-mask"><path d="M18 11c-1.5 0-2.5.5-3 2"/><path d="M4 6a2 2 0 0 0-2 2v4a5 5 0 0 0 5 5 8 8 0 0 1 5 2 8 8 0 0 1 5-2 5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3a8 8 0 0 0-5 2 8 8 0 0 0-5-2z"/><path d="M6 11c1.5 0 2.5.5 3 2"/></svg>
                </p>
            </div>
            <x-button @click="$wire.step = 'class'; $wire.$refresh()">
                Create character
            </x-button>
        </div>
    @endif

    <form wire:submit="create" class="relative  flex  flex-col">
        
        <!-- Summary -->
        @unless ($step === 'intro')
            <div class="sticky  z-10  top-0  py-4  border-b-2  border-stone-600  bg-stone-800/95  backdrop-blur-sm">
                <div class="flex  items-center  gap-6">
                    <div>
                        Class
                        <div x-text="$wire.class ? $wire.classes[$wire.class].name : 'Pick class'" class="text-xl  font-bold"></div>
                    </div>

                    <x-icon.arrow-right class="transition  duration-500" ::class="{ 'opacity-40': !$wire.class }" />

                    <div class="transition  duration-500" :class="{ 'opacity-40': !$wire.class }">
                        Sub class
                        <div x-text="$wire.sub_class ? $wire.classes[$wire.class].sub_classes[$wire.sub_class].name : 'Pick sub class'" class="text-xl  font-bold"></div>
                    </div>

                    <x-icon.arrow-right class="transition  duration-500" ::class="{ 'opacity-40': !$wire.sub_class }" />

                    <div class="transition  duration-500" :class="{ 'opacity-40': !$wire.sub_class }">
                        Ancestry
                        <div x-text="$wire.ancestry ? $wire.ancestries[$wire.ancestry].name : 'Pick an ancestry'" class="text-xl  font-bold"></div>
                    </div>

                    <x-icon.arrow-right class="transition  duration-500" ::class="{ 'opacity-40': !$wire.ancestry }" />

                    <div class="transition  duration-500" :class="{ 'opacity-40': !$wire.ancestry }">
                        Community
                        <div x-text="$wire.community ? $wire.communities[$wire.community].name : 'Pick a community'" class="text-xl  font-bold"></div>
                    </div>

                    <x-icon.arrow-right class="transition  duration-500" ::class="{ 'opacity-40': !$wire.community }" />

                    <div class="transition  duration-500" :class="{ 'opacity-40': !$wire.community }">
                        Traits
                        <div class="text-xl  font-bold">Pick traits</div>
                    </div>
                </div>
            </div>
        @endunless

        <!-- Class -->
        @if ($step === 'class')
            <div>
                <!-- Quick jump -->
                <div class="flex  flex-wrap  items-center  gap-6  pt-12">
                    <strong>Quick jump: </strong>

                    @foreach ($classes as $key => $c)
                        <button type="button" @click="$refs.class{{ $key }}.scrollIntoView({ behavior: 'smooth' })" class="underline  transition  hover:decoration-transparent">
                            {{ $c['name'] }}
                        </button>
                    @endforeach
                </div>

                <!-- Classes -->
                <div class="flex  flex-col  gap-24  mt-12">
                    @foreach ($classes as $key => $c)
                        <div x-ref="class{{ $key }}" class="overflow-hidden  grid  grid-cols-5  rounded-xl  shadow-xl">
                            <div class="col-span-2  relative">
                                <img src="{{ asset('images/classes/' . $key . '.webp') }}" alt="{{ $c['name'] }}" class="absolute  inset-0  w-full  h-full  object-cover">
                            </div>

                            <div class="col-span-3  flex  flex-col  bg-stone-900  text-left">
                                <x-card-header>
                                    <h3 class="text-lg  font-semibold">
                                        {{ $c['name'] }}
                                    </h3>
                                    <span class="text-xs  uppercase  tracking-widest  opacity-50">{{ implode(' & ', $c['keywords']) }}</span>
                                </x-card-header>

                                <div class="max-w-none  p-6  prose  prose-sm  prose-invert">
                                    {!! Str::markdown($c['features']) !!}
                                </div>

                                <x-card-footer>
                                    <div class="grid  grid-cols-3">
                                        <div class="col-span-2  flex  flex-col">
                                            <strong>Sub classes:</strong>
                                            {{ implode(' & ', array_column($c['sub_classes'], 'name')) }}
                                        </div>

                                        <x-button @click="$wire.class = '{{ $key }}'; $wire.step = 'sub_class'; $wire.$refresh()">
                                            Pick {{ $c['name'] }}
                                        </x-button>
                                    </div>
                                </x-card-footer>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Sub class -->
        @if ($step === 'sub_class')
            <div>
                <x-create-char.intro heading="Pick a sub-class" back="Back to class" back_slug="class">
                    Your choice of sub-class will forge your hero's unique path, unlocking legendary abilities and shaping your destiny. Each sub-class masters distinct powers that will define your character's journey and impact every adventure ahead.
                </x-create-char.intro>
            
                <div class="grid  grid-cols-2  gap-6  mt-12">
                    @foreach ($classes[$class]['sub_classes'] as $key => $c)
                        <div class="overflow-hidden  flex  flex-col  bg-stone-900  text-left  rounded-xl  shadow-xl">
                            <div class="flex  flex-wrap  items-center  justify-between  px-6  py-4  bg-gradient-to-br  from-stone-700  to-stone-800">
                                <h3 class="text-lg  font-semibold">
                                    {{ $c['name'] }}
                                </h3>

                                @if ($c['spellcast'])
                                    <span class="text-xs  uppercase  tracking-widest  opacity-50">
                                        Spellcast: <b>{{ $c['spellcast'] }}</b>
                                    </span>
                                @endif
                            </div>

                            <div class="grow  max-w-none  p-6  prose  prose-sm  prose-invert">
                                {!! Str::markdown($c['foundation']) !!}
                            </div>

                            <div class="flex  justify-end  px-6  pb-6">
                                <x-button @click="$wire.sub_class = '{{ $key }}'; $wire.step = 'ancestry'; $wire.$refresh()">
                                    Pick {{ $c['name'] }}
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Ancestry -->
        @if ($step === 'ancestry')
            <div>
                <x-create-char.intro heading="Pick an ancestry" back="Back to sub-class" back_slug="sub_class">
                    From the ancient forests of the elves to the deep halls of dwarven cities, your ancestry shapes who you are. Each lineage carries its own traditions, abilities, and cultural heritage that will influence your character's path forward.
                </x-create-char.intro>
            
                <div class="grid  grid-cols-3  gap-6  mt-6">
                    @foreach ($ancestries as $key => $a)
                        <div class="overflow-hidden  flex  flex-col  bg-stone-900  text-left  rounded-xl  shadow-xl">
                            <img src="{{ asset('images/ancestries/' . $key . '.png') }}" alt="{{ $a['name'] }}" class="w-full  aspect-[5/3]  object-cover">

                            <div class="grow  max-w-none  p-6">
                                <h3 class="text-lg  font-semibold">
                                    {{ $a['name'] }}
                                </h3>

                                <em class="text-xs  opacity-80">{{ $a['info'] }}</em>

                                <div class="mt-4  prose  prose-sm  prose-invert">
                                    {!! Str::markdown($a['abilities']) !!}
                                </div>
                            </div>

                            <div class="flex  justify-end  px-6  pb-6">
                                <x-button @click="$wire.ancestry = '{{ $key }}'; $wire.step = 'community'; $wire.$refresh()">
                                    Pick {{ $a['name'] }}
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Community -->
        @if ($step === 'community')
            <div>
                <x-create-char.intro heading="Pick a community" back="Back to ancestry" back_slug="ancestry">
                    Select a community that resonates with your character's spirit, joining those who walk a similar path. Each community brings its own traditions, perspectives, and bonds that will influence how your character grows and develops in the world.
                </x-create-char.intro>
            
                <div class="grid  grid-cols-3  gap-6  mt-6">
                    @foreach ($communities as $key => $c)
                        <div class="overflow-hidden  flex  flex-col  bg-stone-900  text-left  rounded-xl  shadow-xl">
                            <img src="{{ asset('images/communities/' . $key . '.png') }}" alt="{{ $c['name'] }}" class="w-full  aspect-[5/3]  object-cover">

                            <div class="grow  max-w-none  p-6">
                                <h3 class="text-lg  font-semibold">
                                    {{ $c['name'] }}
                                </h3>

                                <em class="text-xs  opacity-80">{{ $c['info'] }}</em>

                                <div class="mt-4  prose  prose-sm  prose-invert">
                                    {!! Str::markdown($c['abilities']) !!}
                                </div>
                            </div>

                            <div class="flex  justify-end  px-6  pb-6">
                                <x-button @click="$wire.community = '{{ $key }}'; $wire.step = 'traits'; $wire.$refresh()">
                                    Pick {{ $c['name'] }}
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Traits -->
        @if ($step === 'traits')
            <div>
                <x-create-char.intro heading="Pick your traits" back="Back to community" back_slug="community">
                    Choose your traits wisely, as they will shape your character's abilities and destiny. Distribute the following values between your traits: -1, 0, 0, +1, +1, +2.
                </x-create-char.intro>

                <div>

                    {{-- <div class="flex  flex-wrap  items-center  justify-start  gap-6  mt-6  text-center">
                        <div class="grid  place-content-center  gap-1  size-20  bg-stone-900  rounded-full  shadow-xl">
                            <span class="text-2xl  font-bold">-1</span>

                            <div class="flex  justify-center  gap-1">
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.includes(-1) }"></span>
                            </div>
                        </div>

                        <div class="grid  place-content-center  gap-1  size-20  bg-stone-900  rounded-full  shadow-xl">
                            <span class="text-2xl  font-bold">0</span>

                            <div class="flex  justify-center  gap-1">
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.includes(0) }"></span>
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.filter(v => v === 0).length >= 2 }"></span>
                            </div>
                        </div>

                        <div class="grid  place-content-center  gap-1  size-20  bg-stone-900  rounded-full  shadow-xl">
                            <span class="text-2xl  font-bold">+1</span>

                            <div class="flex  justify-center  gap-1">
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.includes(1) }"></span>
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.filter(v => v === 1).length >= 2 }"></span>
                            </div>
                        </div>

                        <div class="grid  place-content-center  gap-1  size-20  bg-stone-900  rounded-full  shadow-xl">
                            <span class="text-2xl  font-bold">+2</span>

                            <div class="flex  justify-center  gap-1">
                                <span class="w-2  h-2  text-stone-100  border  border-current  rounded-full" :class="{ 'bg-current': values.includes(2) }"></span>
                            </div>
                        </div>
                    </div> --}}

                    @php
                        $traits = [
                            'agility' => 'Agility',
                            'strength' => 'Strength',
                            'finesse' => 'Finesse',
                            'instinct' => 'Instinct',
                            'presence' => 'Presence',
                            'knowledge' => 'Knowledge',
                        ];
                    @endphp

                    <div class="grid  grid-cols-6  gap-6  mt-6">
                        @foreach ($traits as $key => $trait)
                            <div class="p-6  bg-stone-900  rounded-xl  shadow-xl  text-center">
                                <div class="text-xl  font-bold">{{ $trait }}</div>

                                <div class="text-4xl  font-bold">
                                    <span x-text="$wire['{{$key}}'] > 0 ? '+' + $wire['{{$key}}'] : $wire['{{$key}}']"></span>
                                    <span x-show="!$wire['{{$key}}']">-</span>
                                </div>

                                <select x-model="$wire['{{$key}}']" class="w-full  mt-4  p-2  rounded-md  bg-stone-800  text-stone-100">
                                    <option value="-">-</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0">0</option>
                                    <option value="-1">-1</option>
                                </select>
                            </div>
                        @endforeach
                    </div>

                    <x-button @click="$wire.step = 'name'; $wire.$refresh()" class="mt-6">
                        Next
                    </x-button>

                </div>
            </div>
        @endif

        <!-- Name -->
        @if ($step === 'name')
            <div class="space-y-6">
                <x-create-char.intro heading="Name your character" back="Back to traits" back_slug="traits">
                    Choose a name for your character. This is how they will be known throughout their adventures. The name should reflect their heritage and personality.
                </x-create-char.intro>

                <div class="max-w-sm">
                    <x-input.field label="Name">
                        <x-input.text name="name" wire:model.live="name" />
                        <x-input.error name="name" />
                    </x-input.field>
                </div>

                <x-button type="submit">
                    Create
                </x-button>
            </div>
        @endif

    </form>
</div>
