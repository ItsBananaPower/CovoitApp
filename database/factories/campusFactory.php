<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campus>
 */
class campusFactory extends Factory
{
    public function definition(): array 
    { 
        return [ 
        'description' => $this->faker->sentence(3), 
        'adresse' => $this->faker->address(),
        'type' => $this->faker->randomElement(['Principal', 'Secondaire', 'Technique'])
        ];
    }
}
