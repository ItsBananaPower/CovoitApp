<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class voitureFactory extends Factory
{
    public function definition(): array
    {
        return [
            'modele' => $this->faker->word(),
            'nb_places' => $this->faker->numberBetween(2, 5),
            'employe_id' => Employe::factory(),
        ];
    } 
}
