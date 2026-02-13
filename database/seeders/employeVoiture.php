<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeVoiture extends Seeder
{
    public function run(): void
    {
        App/Models/Employe::factory(10)->hasVoitures(1)->create();
    }
}
