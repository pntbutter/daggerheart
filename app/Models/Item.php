<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\ItemType;

class Item extends Model
{
    protected $guarded = [];

    protected $casts = [
        'item_type' => ItemType::class,
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    protected function itemData(): array
    {
        static $items = [];

        if (!$items) {
            $items = config('items');
        }

        return $items[$this->item_type->value][$this->item_key];
    }

    public function getNameAttribute(): string
    {
        return $this->itemData()['name'] ?? $this->item_key;
    }

    public function getFeatureAttribute(): string
    {
        return $this->itemData()['feature'] ?? '';
    }

    public function getEquippedAttribute(): bool
    {
        $equipped = match($this->item_type->value) {
            'armor'     => $this->item_key === $this->character->equipped_armor,
            'primary'   => $this->item_key === $this->character->equipped_primary,
            'secondary' => $this->item_key === $this->character->equipped_secondary,
            default => false,
        };

        return $equipped;
    }

    public function getEquippableAttribute(): bool
    {
        return in_array($this->item_type->value, ['armor', 'primary', 'secondary']);
    }

    public function getBurdenAttribute(): int
    {
        return $this->itemData()['burden'] ?? 1; 
    }
}
