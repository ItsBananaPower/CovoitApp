<?php

namespace Database\Factories;

use App\Models\Campus;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajet>
 */
class trajetFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_campus_depart' => Campus::factory(),
            'id_campus_arrivee' => Campus::factory(),
            'date_time_depart' => $this->faker->dateTime(),
            'date_time_arrivee' => $this->faker->dateTime(),
            'id_voiture' => Voiture::factory(),
        ];
    }
}
