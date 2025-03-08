<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Character extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    /**
     * Get cached config data
     *
     * @param string $key
     * @return array
     */
    protected function getConfigData(string $key): array
    {
        static $configCache = [];
        
        if (!isset($configCache[$key])) {
            $configCache[$key] = config($key) ?? [];
        }
        
        return $configCache[$key];
    }
    
    /**
     * Get the character's heritage (community + ancestry)
     *
     * @return string
     */
    public function getHeritageAttribute(): string
    {
        $communities = $this->getConfigData('communities');
        $ancestries = $this->getConfigData('ancestries');
        
        $communityName = $communities[$this->community]['name'] ?? '';
        $ancestryName = $ancestries[$this->ancestry]['name'] ?? '';
        
        return trim("{$communityName} {$ancestryName}");
    }
    
    /**
     * Get the character's class name
     *
     * @return string
     */
    public function getClassNameAttribute(): string
    {
        $classes = $this->getConfigData('classes');
        return $classes[$this->class]['name'] ?? '';
    }

    /**
     * Get the character's subclass name
     *
     * @return string
     */
    public function getSubClassNameAttribute(): string
    {
        $classes = $this->getConfigData('classes');
        return $classes[$this->class]['sub_classes'][$this->sub_class]['name'] ?? '';
    }

    /**
     * Get the character's evasion
     *
     * @return int
     */
    public function getEvasionAttribute(): int
    {
        $classes = $this->getConfigData('classes');
        $baseEvasion = $classes[$this->class]['evasion'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $evasionModifier = $armor['modifiers']['evasion'] ?? 0;
            return $baseEvasion + $evasionModifier;
        }

        return $baseEvasion;
    }

    /**
     * Get the character's armor value from equipped armor
     *
     * @return int
     */
    public function getArmorScoreAttribute(): int
    {
        if (!$this->equipped_armor) {
            return 0;
        }

        $items = $this->getConfigData('items');
        return $items['armor'][$this->equipped_armor]['base_score'] ?? 0;
    }


    /**
     * Get the character's agility, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedAgilityAttribute(): int
    {
        $baseAgility = $this->attributes['agility'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $agilityModifier = $armor['modifiers']['agility'] ?? 0;
            return $baseAgility + $agilityModifier;
        }

        return $baseAgility;
    }

    /**
     * Get the character's strength, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedStrengthAttribute(): int
    {
        $baseStrength = $this->attributes['strength'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $strengthModifier = $armor['modifiers']['strength'] ?? 0;
            return $baseStrength + $strengthModifier;
        }

        return $baseStrength;
    }

    /**
     * Get the character's finesse, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedFinesseAttribute(): int
    {
        $baseFinesse = $this->attributes['finesse'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $finesseModifier = $armor['modifiers']['finesse'] ?? 0;
            return $baseFinesse + $finesseModifier;
        }

        return $baseFinesse;
    }

    /**
     * Get the character's instinct, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedInstinctAttribute(): int
    {
        $baseInstinct = $this->attributes['instinct'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $instinctModifier = $armor['modifiers']['instinct'] ?? 0;
            return $baseInstinct + $instinctModifier;
        }

        return $baseInstinct;
    }

    /**
     * Get the character's presence, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedPresenceAttribute(): int
    {
        $basePresence = $this->attributes['presence'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $presenceModifier = $armor['modifiers']['presence'] ?? 0;
            return $basePresence + $presenceModifier;
        }

        return $basePresence;
    }

    /**
     * Get the character's knowledge, affected by armor modifiers
     *
     * @return int
     */
    public function getModifiedKnowledgeAttribute(): int
    {
        $baseKnowledge = $this->attributes['knowledge'] ?? 0;

        if ($this->equipped_armor) {
            $items = $this->getConfigData('items');
            $armor = $items['armor'][$this->equipped_armor] ?? [];
            $knowledgeModifier = $armor['modifiers']['knowledge'] ?? 0;
            return $baseKnowledge + $knowledgeModifier;
        }

        return $baseKnowledge;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
