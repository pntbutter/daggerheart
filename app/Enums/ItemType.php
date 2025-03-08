<?php

namespace App\Enums;

enum ItemType: string
{
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
    case ARMOR = 'armor';
    case CONSUMABLE = 'consumable';

    public function label(): string
    {
        return match($this) {
            self::PRIMARY => 'Primary weapon',
            self::SECONDARY => 'Secondary weapon',
            self::ARMOR => 'Armor',
            self::CONSUMABLE => 'Consumable',
        };
    }
    
    public static function fromValue(?string $value): ?self
    {
        if ($value === null) {
            return null;
        }
        
        return self::tryFrom($value) ?? throw new \ValueError("Invalid item type: {$value}");
    }
}
