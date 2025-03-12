<?php

return [

    'armor' => [

        'gambeson' => [
            'name' => 'Gambeson Armor',
            'feature' => '**Flexible:** +1 to Evasion.',
            'base_score' => 3,
            'modifiers' => [
                'evasion' => 1,
            ],
        ],

        'leather' => [
            'name' => 'Leather Armor',
            'feature' => '',
            'base_score' => 4
        ],

        'chainmail' => [
            'name' => 'Chainmail Armor',
            'feature' => '**Heavy:** -1 to Evasion.',
            'base_score' => 5,
            'modifiers' => [
                'evasion' => -1,
            ],
        ],

        'full_plate' => [
            'name' => 'Full Plate Armor',
            'feature' => '**Very Heavy:** -2 to Evasion and -1 Agility.',
            'base_score' => 6,
            'modifiers' => [
                'evasion' => -2,
                'agility' => -1,
            ],
        ],

    ],

    'primary' => [

        'battleaxe' => [
            'name' => 'Battleaxe',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '',
            'dmg' => 'd10+3',
            'dmg_type' => 'phy',
            'burden' => 2,
            'modifiers' => [],
        ],

        'warhammer' => [
            'name' => 'Warhammer',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '**Heavy:** -1 to Agility.',
            'dmg' => 'd12+3',
            'dmg_type' => 'phy',
            'burden' => 2,
            'modifiers' => [
                'agility' => -1,
            ],
        ],

        'greatsword' => [
            'name' => 'Greatsword',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '**Massive:** -1 Agility, roll one extra damage die and drop the lowest.',
            'dmg' => 'd10+3',
            'dmg_type' => 'phy',
            'burden' => 2,
            'modifiers' => [
                'agility' => -1,
            ],
        ],

        'mace' => [
            'name' => 'Mace',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '',
            'dmg' => 'd8+1',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [],
        ],

        'broadsword' => [
            'name' => 'Broadsword',
            'trait' => 'Agility',
            'range' => 'Melee',
            'feature' => '**Reliable:** +1 to attack rolls with this weapon.',
            'dmg' => 'd8',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [
                'attack_roll' => 1,
            ],
        ],

        'arcane_gauntlets' => [
            'name' => 'Arcane Gauntlets',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '',
            'dmg' => 'd10+3',
            'dmg_type' => 'mag',
            'burden' => 2,
            'modifiers' => [],
        ],

    ],

    'secondary' => [

        'round_shield' => [
            'name' => 'Round Shield',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '**Protective:** Add +1 to your armor score.',
            'dmg' => 'd4',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [
                'armor_score' => 1,
            ],
        ],

        'tower_shield' => [
            'name' => 'Tower Shield',
            'trait' => 'Strength',
            'range' => 'Melee',
            'feature' => '**Barrier:** Add +3 to your armor score, -2 to Evasion.',
            'dmg' => 'd6',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [
                'armor_score' => 3,
                'evasion' => -2
            ],
        ],

        'small_dagger' => [
            'name' => 'Small Dagger',
            'trait' => 'Finesse',
            'range' => 'Melee',
            'feature' => '**Paired:** +2 to Primary Weapon damage in melee.',
            'dmg' => 'd8',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [],
        ],

        'shortsword' => [
            'name' => 'Shortsword',
            'trait' => 'Agility',
            'range' => 'Melee',
            'feature' => '**Paired:** +2 to Primary Weapon damage in melee.',
            'dmg' => 'd8',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [],
        ],

        'whip' => [
            'name' => 'Whip',
            'trait' => 'Presence',
            'range' => 'Very close',
            'feature' => '**Whipcrack:** Mark stress to scatter enemies in melee back to close range.',
            'dmg' => 'd6',
            'dmg_type' => 'phy',
            'burden' => 1,
            'modifiers' => [],
        ],

    ],

    'item' => [

        'premium_bedroll' => [
            'name' => 'Premium bedroll',
            'feature' => 'During any rests, you always automatically clear 1 stress.',
        ],

        'piper_whistle' => [
            'name' => 'Piper Whistle',
            'feature' => 'A handcrafted whistle. Each have a distinctive sound, and the piercing tone can be heard across a one mile radius.',
        ],

        'charging_quiver' => [
            'name' => 'Charging Quiver',
            'feature' => 'When arrows for a bow are kept in the Charging Quiver, damage rolls using the bow deal +2 damage.',
        ],

    ],

    'consumable' => [

        'stride_potion' => [
            'name' => 'Stride Potion',
            'feature' => 'Take a +1 to your next Agility roll.',
        ],

        'bolster_potion' => [
            'name' => 'Bolster Potion',
            'feature' => 'Take a +1 to your next Strength roll.',
        ],

        'focus_potion' => [
            'name' => 'Focus Potion',
            'feature' => 'Take a +1 to your next Finesse roll.',
        ],

        'charm_potion' => [
            'name' => 'Charm Potion',
            'feature' => 'Take a +1 to your next Presence roll.',
        ],

        'sharp_potion' => [
            'name' => 'Sharp Potion',
            'feature' => 'Take a +1 to your next Knowledge roll.',
        ],

        'attune_potion' => [
            'name' => 'Attune Potion',
            'feature' => 'Take a +1 to your next Instinct roll.',
        ],

        'minor_health_potion' => [
            'name' => 'Minor Health Potion',
            'feature' => 'Immediately clear 1d4 hit points.',
        ],

        'minor_stamina_potion' => [
            'name' => 'Minor Stamina Potion',
            'feature' => 'Immediately clear 1d4 stress.',
        ],

    ],

];
