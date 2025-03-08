<?php

return [

    'clank' => [
        'name' => 'Clank',
        'info' => 'Clanks are sentient mechanical beings built from a variety of materials including metal and wood.',
        'abilities' => <<<EOT
        **Purposeful Design:** Decide who you were created by and for what purpose. Choose an experience you have that reflects this and increase it by **+1**.
        
        **Efficient:** When you take a short rest, you can substitute a long rest move for one of your short rest moves.
        EOT,
    ],

    'ribbet' => [
        'name' => 'Ribbet',
        'info' => 'Those of ribbet ancestry resemble anthropomorphic frogs with protruding eyes and webbed hands and feet.',
        'abilities' => <<<EOT
        **Long Tongue:** You can use your long tongue to grab onto things Close to you. You can also mark a **Stress** to unleash it as a Finesse Close weapon that does **d12** physical damage using your Proficiency.
        
        **Amphibious:** You can breathe and move underwater just as easily as on land.
        EOT,
    ],

    'inferis' => [
        'name' => 'Inferis',
        'info' => 'Those of inferis ancestry are humanoids who possess sharp canines, pointed ears, and horns that come in a variety of styles. They are the descendants of demons from the Circles Below.',
        'abilities' => <<<EOT
        **Fearless:** When you roll with **Fear**, you can mark **2 Stress** to make it a roll with **Hope** instead.
        
        **Dread Visage:** You have advantage on rolls to intimidate a hostile target.
        EOT,
    ],

    'dwarf' => [
        'name' => 'Dwarf',
        'info' => 'Dwarves are most easily recognized as short humanoids with square features, dense musculature, and thick hair.',
        'abilities' => <<<EOT
        **Increased Fortitude:** You can spend **3 Hope** to halve incoming physical damage. 
        
        **Thick Skin:** When taking minor damage, roll **1d6**. On a **5+**, you take no damage instead.
        EOT,
    ],

    'giant' => [
        'name' => 'Giant',
        'info' => 'Giants are very tall humanoids with long arms, broad stature, and one to three eyes.',
        'abilities' => <<<EOT
        **Endurance:** Gain an additional Hit Point slot at character creation.
        
        **Reach:** Treat any weapon, feature, ability, or spell that has Melee range as though it has Very Close range instead.
        EOT,
    ],

    'elf' => [
        'name' => 'Elf',
        'info' => 'Elves are typically tall humanoids with pointed ears and acutely attuned senses.',
        'abilities' => <<<EOT
        **Quick Reactions:** You can mark a **Stress** to take advantage on a Reaction Roll.
        
        **Celestial Trance:** During a rest, you can drop into a trance and make an extra downtime move.
        EOT,
    ],

    'human' => [
        'name' => 'Human',
        'info' => 'Those of human ancestry are most easily recognized by their dexterous hands, rounded ears, and bodies built for endurance.',
        'abilities' => <<<EOT
        **High Stamina:** Take an additional **Stress** slot at character creation.
        
        **Adaptability:** When you fail a roll that utilized one of your Experiences, you can mark a **Stress** to reroll. You must take the new result.
        EOT,
    ],

    'orc' => [
        'name' => 'Orc',
        'info' => 'Orcs are most easily recognized as humanoids with square features and boar-like tusks.',
        'abilities' => <<<EOT
        **Sturdy:** When you have one hit point remaining, your armor score is doubled.
        
        **Tusks:** After making a successful Melee attack, you can spend **Hope** to also gore the target with your tusks, adding **+1d6** to the damage roll.
        EOT,
    ],

    'halfling' => [
        'name' => 'Halfling',
        'info' => 'Halflings are typically smaller humanoids, with large hairy feet and prominent, rounded ears.',
        'abilities' => <<<EOT
        **Youthful Spirit:** At the beginning of each session, give everyone in your party a **Hope**.
        
        **Little Lucky:** When you roll a 1 on your **Hope** die, you can reroll it, and must take the new result.
        EOT,
    ],

    'drakona' => [
        'name' => 'Drakona',
        'info' => 'Drakona resemble wingless dragons in humanoid form and possess a powerful elemental breath.',
        'abilities' => <<<EOT
        **Scales:** Your natural scales acts as protection, increasing all damage thresholds by +1.
        
        **Elemental Breath:** Choose an element for your breath (ice, fire, electricity, etc.). You can use this breath against a target or group of targets within Very Close range, treating it as an Instinct weapon that deals **d8** magic damage using your Proficiency.
        EOT,
    ],

    'katari' => [
        'name' => 'Katari',
        'info' => 'Those of katari ancestry are feline humanoids with soft fur and high, triangular ears.',
        'abilities' => <<<EOT
        **Feline Instincts:** When you make an Agility roll, you can mark a **Stress** to reroll your Hope Die. You must take the new result.
        
        **Retracting Claws:** You can make an Agility roll to scratch a target in Melee range. On a success, they become Vulnerable.
        EOT,
    ],

    'faerie' => [
        'name' => 'Faerie',
        'info' => 'Those of faerie ancestry are winged humanoid creatures with insect-like features.',
        'abilities' => <<<EOT
        **Wings:** You can fly. While flying, mark a **Stress** before an adversary's attack roll to increase your Evasion by **+2** against that attack.
        
        **Luckbender:** Once per session, after you or an ally in Close range makes an **Action Roll**, you can spend **3 Hope** to reroll the Duality Dice. You must take the new result.
        EOT,
    ],

    'faun' => [
        'name' => 'Faun',
        'info' => 'Fauns resemble goats in humanoid form, with curving horns, square pupils, and cloven hooves.',
        'abilities' => <<<EOT
        **Leap:** You can easily leap up to Close range across gaps or chasms without making an Agility roll.
        
        **Kick:** On a successful melee attack, you can mark a **Stress** to kick yourself off of the target, adding **2d6** to the damage and pushing either them or yourself out of Melee range.
        EOT,
    ],

    'galapa' => [
        'name' => 'Galapa',
        'info' => 'Those of galapa ancestry resemble anthropomorphic turtles, with a large, domed shell into which their heads and limbs can retract.',
        'abilities' => <<<EOT
        **Shell of Protection:** Your shell provides a natural shield. Add your Proficiency to your armor score.
        
        **Slow and Steady:** During combat, you can make an attack roll with advantage by placing an additional token on the action tracker.
        EOT,
    ],

    'goblin' => [
        'name' => 'Goblin',
        'info' => 'Those of goblin ancestry are small humanoids typically recognized by their large eyes and massive, membranous ears.',
        'abilities' => <<<EOT
        **Danger Sense:** Once per short rest, mark a **Stress** to make an adversary reroll an attack against you or an ally within Very Close range of you.
        
        **Surefooted:** You ignore disadvantage on Agility rolls.
        EOT,
    ],

    'fungril' => [
        'name' => 'Fungril',
        'info' => 'Fungrils resemble a mushroom in humanoid form.',
        'abilities' => <<<EOT
        **Fungril Network:** You can make an Instinct Roll (12) to speak with others of your ancestry across any distance using your mycelial array.
        
        **Death Connection:** While touching a corpse that died recently, you can mark a **Stress** to extract one memory related to a specific emotion or sensation.
        EOT,
    ],

    'firbolg' => [
        'name' => 'Firbolg',
        'info' => 'Firbolgs resemble cows in humanoid form, typically recognized by their broad nose and long ears.',
        'abilities' => <<<EOT
        **Natural Calm:** Whenever you should mark a **Stress**, roll a **d6**. On a **6**, don't mark it.
        
        **Charge:** When you succeed on an Agility roll to move from Far or Very Far range into Melee with one or more targets, mark a **Stress** to deal **1d12** physical damage to all targets.
        EOT,
    ],

    'simiah' => [
        'name' => 'Simiah',
        'info' => 'Simiah resemble anthropomorphic monkeys and apes, with long limbs and prehensile feet.',
        'abilities' => <<<EOT
        **Nimble:** Increase your Evasion by **+1** at character creation. 
        
        **Natural Climber:** You have advantage on Agility rolls that involve balancing and climbing.
        EOT,
    ],

];
