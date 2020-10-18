<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Race::create([
            'nom'=>'Humain',
        ]);
        Race::create([
            'nom'=>'Elf',
        ]);
        Race::create([
            'nom'=>'Nain',
        ]);
        Race::create([
            'nom'=>'Orc',
        ]);
    }
}
