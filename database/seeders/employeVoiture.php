<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeVoiture extends Seeder
{
    public function run(): void
    {
        Employe::factory(10)->create()->each(function ($employe) {
            $nbVoitures = rand(0, 2);
            Voiture::factory($nbVoitures)->create(['id_employe' => $employe->id]);
        });
    }
}
