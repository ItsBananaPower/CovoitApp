<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employe;

class VoitureFactory extends Factory
{
    public function definition(): array
    {
        return [
            'modele' => $this->faker->word(),
            'nb_places' => $this->faker->numberBetween(2, 5),
            'id_employe' => Employe::factory(),
        ];
    }
}