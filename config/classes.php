<?php

return [

    'warrior' => [
        'name' => 'Warrior',
        'keywords' => ['blade', 'bone'],
        'evasion' => 10,
        'major_dmg' => 7,
        'severe_dmg' => 14,

        'hope' => <<<EOT
        **Warrior's Hope:** Spend three Hope to reroll any number of your damage dice on an attack.
        EOT,

        'features' => <<<EOT
        **Battle Strategist**<br>
        After a successful attack roll, you can describe how you outmaneuver your target, then mark a Stress to deal them a Stress.

        **Attack of Opportunity**<br>
        If an adversary attempts to leave your Melee range, make an Agility reaction roll against their difficulty. Choose one effect on a successful roll, or two on a critical success:
        - Keep them from moving.
        - Deal your primary weapon damage.
        - Move with them.

        **Combat Training**<br>
        Ignore burden when equipping weapons. Whenever you deal physical damage, add your level to its value.
        EOT,

        'sub_classes' => [

            'slayer' => [
                'name' => 'Call of the Slayer',
                'spellcast' => '',

                'foundation' => <<<EOT
                On a roll with Hope, you can place a **d6** on this card instead of taking a Hope. These are known as your Slayer dice. You can store a number of Slayer dice equal to your Proficiency. When you make an attack roll or damage roll, you can spend any number of these Slayer dice, rolling them and adding their value to your total. At the end of a session, clear any remaining Slayer dice on this card and gain that many Hope.
                EOT,

                'specialization' => <<<EOT
                Spec
                EOT,

                'mastery' => <<<EOT
                Mastery
                EOT,
            ],

            'brave' => [
                'name' => 'Call of the Brave',
                'spellcast' => '',

                'foundation' => <<<EOT
                When you fail a roll with **Fear**, you gain a Hope.

                Once per long rest, before you attempt something incredibly dangerous or face off against a foe who clearly outmatches you, describe what ritual you perform or preparation you make, then clear **2 Stress** and gain **2 Hope**.
                EOT,

                'specialization' => <<<EOT
                Spec
                EOT,

                'mastery' => <<<EOT
                Mastery
                EOT,
            ],

        ],
    ],

    'bard' => [
        'name' => 'Bard',
        'keywords' => ['grace', 'codex'],
        'evasion' => 9,
        'major_dmg' => 6,
        'severe_dmg' => 12,

        'hope' => '**Bard\'s Hope**: When you or an ally Close to you makes a Presence roll and either succeeds with Fear or fails, spend three Hope to negate that roll\'s consequences by intervening.',

        'features' => <<<EOT
        **Rally**<br>
        Once per session as your party prepares to enter a dangerous or difficulty situation, describe how you rally them and give yourself and each of your allies a **d6** Rally die. 
        
        Anyone with a Rally die can spend it to roll it, adding the result to an action roll, reaction roll, or damage roll, or clearing Stress equal to the Rally die result. 
        
        At the end of each session, all unspent Rally dice are cleared. 
        
        The Rally die you distribute increases to 1d8 at level 5.
        EOT,

        'sub_classes' => [

            'wordsmith' => [
                'name' => 'Wordsmith',
                'spellcast' => 'Presence',

                'foundation' => <<<EOT
                **Heart of a Poet:** When speaking to a person you're trying to impress, persuade, or offend, you can spend **Hope** and add 1d4 to the action roll against them. 
                
                **Rousing Speech:** Once per long rest, you can use an action to give a heartfelt, inspiring speech. All allies that can hear you clear two Stress.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'troubadour' => [
                'name' => 'Troubadour',
                'spellcast' => 'Presence',

                'foundation' => <<<EOT
                When you take this Foundation, describe what instrument you are practiced in. You can use an action to perform each song once per long rest:
                    
                - **When you play a relaxing song**, you and any Close allies heal 1 Hit Point.
                - **When you play an epic song**, make a Close target temporarily Vulnerable.
                - **When you play a heartbreaking song**, you and any Close allies take a **Hope**.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'druid' => [
        'name' => 'Druid',
        'keywords' => ['sage', 'arcana'],
        'evasion' => 8,
        'major_dmg' => 7,
        'severe_dmg' => 14,

        'hope' => '**Druid\'s Hope:** Spend three **Hope** while in Beastform to increase your damage thresholds by **+3** until you drop the form.',

        'features' => <<<EOT
        **Wildtouch**<br>
        You can perform harmless, subtle effects that involve nature at will. (Ex: causing a flower to rapidly grow, summon a slight gust of wind, start a campfire, etc)

        **Beastform**<br>
        Mark a **Stress** to transform into a magical creature of your level or lower from the Beastform list. While transformed, you can't use your weapons or cast any spells, but you gain the features, attack trait, and evasion bonus of the creature. You can drop out of this form at any time. When in Beastform, your armor becomes part of your body and you mark armor slots as usual; when you drop out of Beastform, those marked armor slots remain marked. 
        
        If you mark your last Hit Point or Stress, this form automatically drops.
        EOT,

        'sub_classes' => [

            'elements' => [
                'name' => 'Warden of the Elements',
                'spellcast' => 'Instinct',

                'foundation' => <<<EOT
                - **Elemental Incarnation:** Mark a Stress to embody an elemental spirit from the list below. The embodiment lasts until you take Severe damage or until your next short rest. This feature can overlap with Beastform.
                - **Fire:** When an enemy in melee range deals damage to you, they take 1d10 magic damage.
                - **Earth:** You gain +1 to your Armor Score.
                - **Water:** When you deal damage to an enemy in Melee range, all other enemies within Very Close range mark a Stress.
                - **Air:** You can hover, gaining advantage on Agility rolls.
                EOT,

                'specialization' => 'Specialization',
                
                'mastery' => 'Mastery',
            ],

            'renewal' => [
                'name' => 'Warden of Renewal',
                'spellcast' => 'Instinct',

                'foundation' => <<<EOT
                **Clarity of Nature:** Once per long rest, you may create a space of natural serenity around you. After spending a few minutes resting within the space, you can clear Stress equal to your Instinct trait, distributed as you choose between you and your allies. 
                
                **Regeneration:** Use an action and spend **3 Hope** to clear **1d4** Hit Points on a creature you are touching.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'guardian' => [
        'name' => 'Guardian',
        'keywords' => ['valor', 'blade'],
        'evasion' => 8,
        'major_dmg' => 8,
        'severe_dmg' => 16,

        'hope' => <<<EOT
        **Guardian's Hope:** Spend three Hope and clear up to three armor slots.
        EOT,

        'features' => <<<EOT
        **Unstoppable**<br>
        Once per Long Rest, you can choose to become Unstoppable. You gain an Unstoppable die, which begins as a **d4**. Place it on the spot to the right, starting with the "1" value facing up. Whenever you deal one or more hit points to an adversary, increase the Unstoppable die value by one. When you increase the value above the die's highest number or when the scene ends, remove the die and drop out of Unstoppable. At Level 3, upgrade your Unstoppable die to a **d6**. At Level 7, upgrade it to a **d8**.

        While Unstoppable, you:<br>
        - Gain resistance to physical damage.
        - Add the current value of the Unstoppable die to your damage dice total.
        - Increase your current Armor Score by your Proficiency.
        - Cannot be Restrained or Vulnerable.
        EOT,

        'sub_classes' => [

            'stalwart' => [
                'name' => 'Stalwart',
                'spellcast' => '',

                'foundation' => <<<EOT
                When you take this foundation, increase all of your Damage Thresholds by **+1**. 
                
                When you take physical damage, always reduce it by your armor score before applying it to your thresholds. You may still spend armor slots to reduce it further.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'vengeance' => [
                'name' => 'Vengeance',
                'spellcast' => '',

                'foundation' => <<<EOT
                When you take this Foundation, gain an additional armor slot immediately. 
                
                When you are hit by an enemy in melee range, immediately roll a number of **d6** equal to the amount of hit points you marked. For each result of **5+**, deal a hit point back to the enemy.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'ranger' => [
        'name' => 'Ranger',
        'keywords' => ['bone', 'sage'],
        'evasion' => 10,
        'major_dmg' => 7,
        'severe_dmg' => 14,

        'hope' => <<<EOT
        **Ranger's Hope:** Spend three Hope and increase your Evasion by +1 until your next short rest.
        EOT,

        'features' => <<<EOT
        **Ranger's Focus**<br>
        Spend Hope and make an attack with your weapon. On a success, you temporarily make that target your Ranger's Focus, along with doing damage from the attack. Until your Ranger's Focus ends or you make a different creature your Ranger's Focus, you gain these benefits:
        - You know precisely what direction they are in.
        - All damage rolls you make against them also deal a Stress.
        - When you miss them with an attack, you can end Ranger's Focus to reroll your Duality dice and take the new result.
        EOT,

        'sub_classes' => [

            'wayfinder' => [
                'name' => 'Wayfinder',
                'spellcast' => 'Agility',

                'foundation' => <<<EOT
                **Apex Predator:** Mark a Stress to increase your Proficiency by **+1** on a damage roll. Additionally, whenever you deal Severe damage to an enemy, they also mark a Stress. 
                
                **Path Forward:** When you're headed for a place you've previously visited, or you carry an object with you that has been there before, you can identify the shortest, most direct path to your destination.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'beastbound' => [
                'name' => 'Beastbound',
                'spellcast' => 'Agility',

                'foundation' => <<<EOT
                You have an animal companion of your choice (at GM's discretion). They always stay next to you unless you tell them otherwise. 
                
                Take the Ranger Companion sheet. Whenever you level up your character, also choose a level up option for your companion from this sheet.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'rogue' => [
        'name' => 'Rogue',
        'keywords' => ['midnight', 'grace'],
        'evasion' => 11,
        'major_dmg' => 6,
        'severe_dmg' => 12,

        'hope' => <<<EOT
        **Rogue's Hope:** Spend three Hope to increase your Sneak Attack damage. Until your next short rest, you add 3d6 instead of 1d6 to each Sneak Attack damage roll.
        EOT,

        'features' => <<<EOT
        **Hide**<br>
        When you move into a location where no enemies can see you, you can use an action to become Hidden (any rolls against you have disadvantage). As a Rogue, when you are Hidden, targets also can't see you, even if they move into line of sight. You are no longer Hidden after you move or attack.
        
        **Sneak Attack**<br>
        Whenever you make an attack while you are Hidden or while an ally is in Melee with your target, add a **d6** to your damage roll. When you use Sneak Attack, you can also spend any number of Hope before the attack roll, then if the attack is successful, also add a number of **d6** equal to the Hope spent.
        EOT,

        'sub_classes' => [

            'syndicate' => [
                'name' => 'Syndicate',
                'spellcast' => 'Finesse',

                'foundation' => <<<EOT
                When you arrive in a prominent town or environment, you know somebody that calls this place home. Give them a name, note how you think they could be useful, and choose one from the list below:
                - They owe me a favor, but they will be hard to find.
                - They're going to ask for something in exchange.
                - They're always in a great deal of trouble.
                - We used to be together. It's a long story.
                - We didn't part on great terms.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'nightwalker' => [
                'name' => 'Nightwalker',
                'spellcast' => 'Finesse',

                'foundation' => <<<EOT
                **Shadow Stepper:** You can move from shadow to shadow. When you step into the shadow cast by another creature or object, or into an area of darkness, mark a Stress to disappear from where you are and reappear inside of any other shadow within Far range. When you do, you are Hidden.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'seraph' => [
        'name' => 'Seraph',
        'keywords' => ['splendor', 'valor'],
        'evasion' => 7,
        'major_dmg' => 8,
        'severe_dmg' => 16,

        'hope' => <<<EOT
        **Seraph's Hope:** Spend three Hope and either reroll a Prayer Die or refresh one of your used Prayer Dice.
        EOT,

        'features' => <<<EOT
        **Prayer Dice**<br>
        At the beginning of each session, roll a number of **d4** dice equal to your Spellcast trait and store them to the right. You can spend one or more of these dice at any time to aid yourself or an ally within Far range. You can use the spent die's value to reduce any incoming damage or add to any roll result after the roll. Additionally, you can exchange the value for that many Hope you may give to any other PC in range. Clear these dice at the end of each session.
        EOT,

        'sub_classes' => [

            'winged_sentinel' => [
                'name' => 'Winged Sentinel',
                'spellcast' => 'Strength',

                'foundation' => <<<EOT
                You can fly. While flying, you may:
                - Spend a **Hope** to pick up and carry another willing creature that is approximately your size or smaller.
                - Mark a **Stress** to deal **1d8** additional damage on a successful attack.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'divine_wielder' => [
                'name' => 'Divine Wielder',
                'spellcast' => 'Strength',

                'foundation' => <<<EOT
                **Spirit Weapon:** When you have a Melee weapon equipped, it can fly from your hand to strike an enemy in Close range and return to you. You can mark a Stress to target an additional target in range with the same **Attack Roll**.
                
                **Sparing Touch:** Once per long rest, use an action and touch a creature to clear **2 Hit Points** or **2 Stress** from them.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'wizard' => [
        'name' => 'Wizard',
        'keywords' => ['codex', 'splendor'],
        'evasion' => 10,
        'major_dmg' => 5,
        'severe_dmg' => 10,

        'hope' => <<<EOT
        **Wizard's Hope:** Spend three Hope instead of marking your last hit point.
        EOT,

        'features' => <<<EOT
        **Prestidigitation**<br>
        You can perform harmless, subtle magical effects at will. For example, you might change an object's color, create a smell, light a candle, cause a tiny object to float, illuminate a room, or repair a small object. 
        
        **Strange Patterns**<br>
        Choose a number between 1 and 12. Whenever you roll that number on a Duality die, gain a Hope or clear a Stress. You can change this number when you finish a long rest.
        EOT,

        'sub_classes' => [

            'knowledge' => [
                'name' => 'School of Knowledge',
                'spellcast' => 'Knowledge',

                'foundation' => <<<EOT
                You've gained priceless knowledge through great study. You have advantage on all Knowledge Rolls to recall information. If this roll is about the magical nature of a creature or enchantment, gain a Hope even on a roll with **Fear**. 
                
                **Adept:** You can mark a Stress instead of spending a Hope to use an Experience on a roll. If you do, double the Experience modifier for that roll.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

            'war' => [
                'name' => 'School of War',
                'spellcast' => 'Knowledge',

                'foundation' => <<<EOT
                You've focused your studies on shaping magic in dangerous and powerful ways. Gain an extra armor slot. 
                
                When you succeed on an **Attack Roll** with **Fear**, you deal an extra **1d10** magic damage.
                EOT,

                'specialization' => 'Specialization',

                'mastery' => 'Mastery',
            ],

        ],
    ],

    'sorcerer' => [
        'name' => 'Sorcerer',
        'keywords' => ['arcana', 'midnight'],
        'evasion' => 9,
        'major_dmg' => 6,
        'severe_dmg' => 12,

        'hope' => <<<EOT
        **Sorcerer\'s Hope:** Spend three Hope after a Spellcast Roll to double the result of hour Hope roll.
        EOT,

        'features' => <<<EOT
        **Arcane Sense**<br>
        You can sense the presence of magial people and objects when you\'re close to them.
        
        **Minor Illusion**<br>
        Make a Spellcast Roll (10). On a success, you create a minor visual illusion no larger than yourself within close Range. This illusion is convicing to anyone in Far range or further.

        **Channel Raw Power**<br>
        Once per Long rest, you can place a Domain card from your Loadout into your vault and choose to either:
        - Gain hope equal to the level of the card
        - Enhance a damage-dealing spell by dealing extra magic damage equal to twice the level of the card.
        During your next short rest, you can return this card to your hand without paying its recall cost.
        EOT,

        'sub_classes' => [

            'primal' => [
                'name' => 'Primal origin',
                'spellcast' => 'Instinct',

                'foundation' => <<<EOT
                Your primal origin allows you to modify the essence of magic itself. After you cast a spell or use a weapon that deals magic damage, you may mark a Stress to do any of the following:
                - Extend its reach by one range.
                - Add **+2** to the action roll result.
                - Reroll any number of Damage Dice.
                -Hit an additional target within range.
                EOT,

                'specialization' => <<<EOT
                You can enhance the magical practices of others with your essence. When you Help an Ally on a **Spellcast Roll**, the advantage die you roll is a **d8** instead of a **d6**. After you help them make their **Spellcast Roll**, once per long rest, you can swap the values of their Duality dice.
                EOT,

                'mastery' => <<<EOT
                You can gather magical energy to enhance your capability. You become charged after taking magic damage or when you spend **2 Hope** to become charged. When you successfully cast a spell while charged, you can spend your charge to temporarily increase either that spell\'s Damage Proficiency by **+1** or its Reaction Roll Difficulty by **+3**. 
                You stop being charged when you finish a long rest.
                EOT,
            ],

            'elemental' => [
                'name' => 'Elemental origin',
                'spellcast' => 'Instinct',

                'foundation' => <<<EOT
                Your elemental origin lets you manipulate and shape a certain kind of element. Choose one:<br>
                **WATER • FIRE • AIR • LIGHTNING • EARTH**<br>
                You can channel this element into unique, harmless effects. Additionally, you can spend a Hope and describe how your control over this element helps an action roll you\'re about to make, then add either **+2** to the roll or **+3** to the damage.
                EOT,

                'specialization' => <<<EOT
                You can call forth your chosen element to protect you from harm. When an attack roll against you succeeds, you can spend a Stress and describe how you channel your element to defend you, then add **1d6** to your Evasion against the attack. If the new Evasion is high enough to avoid the attack, it does.
                EOT,

                'mastery' => <<<EOT
                Once per long rest, you can transform into an elemental form of your chosen element. When you do, describe your transformation and choose two of the following benefits to gain until your next short rest:
                - +4 to your Severe Threshold
                - +1 to a Character Trait of your choice
                - +1 Proficiency
                - +2 to your Armor Score
                - +2 Evasion
                EOT,
            ],

        ],
    ],

];
