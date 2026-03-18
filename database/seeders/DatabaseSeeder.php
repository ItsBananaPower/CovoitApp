<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\Voiture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer 10 employés avec 0 à 2 véhicules aléatoires chacun
        Employe::factory(10)->create()->each(function ($employe) {
            $nbVoitures = rand(0, 2);
            Voiture::factory($nbVoitures)->create(['id_employe' => $employe->id]);
        });
    }
}
