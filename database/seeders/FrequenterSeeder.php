<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\Campus;

class FrequenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campuses = Campus::all();

        if ($campuses->isEmpty()) {
            Campus::create(['description' => 'Campus de Bayonne', 'adresse' => 'Allée du Parc Montaury', 'type' => 'IUT']);
            Campus::create(['description' => 'Campus d\'Anglet', 'adresse' => 'Rue de la glisse', 'type' => 'Logistique']);
            Campus::create(['description' => 'Campus de Pau', 'adresse' => 'Avenue de l\'université', 'type' => 'Général']);
            
            $campuses = Campus::all();
        }

        $employes = Employe::all();

        foreach ($employes as $employe) {

            $randomCampuses = $campuses->random(rand(1, 2))->pluck('id');

            $employe->campuses()->syncWithoutDetaching($randomCampuses);
        }
    }
}
