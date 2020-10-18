<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classe::create([
            'nom'=>'Guerrier',
        ]);
        Classe::create([
            'nom'=>'Mage',
        ]);
        Classe::create([
            'nom'=>'Pretre',
        ]);
        Classe::create([
            'nom'=>'Chasseur',
        ]);
    }
}
