<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'class' => 'warrior',
            'sub_class' => 'slayer',
            'ancestry' => 'inferis',
            'community' => 'underborne',
            'agility' => 2,
            'strength' => 1,
            'finesse' => 1,
            'instinct' => 0,
            'presence' => 0,
            'knowledge' => -1
        ];
    }
}
