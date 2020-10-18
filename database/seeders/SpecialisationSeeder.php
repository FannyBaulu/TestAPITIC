<?php

namespace Database\Seeders;

use App\Models\Specialisation;
use Illuminate\Database\Seeder;

class SpecialisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialisation::create([
            'nom'=>'Arme',
            'classe_id'=>'1',
            'icone'=>'spe_arme.png'
        ]);
        Specialisation::create([
            'nom'=>'Fureur',
            'classe_id'=>'1',
            'icone'=>'spe_fureur.png'
        ]);
        Specialisation::create([
            'nom'=>'Protection',
            'classe_id'=>'1',
            'icone'=>'spe_protection.png'
        ]);

        Specialisation::create([
            'nom'=>'Givre',
            'classe_id'=>'2',
            'icone'=>'spe_givre.png'
        ]);
        Specialisation::create([
            'nom'=>'Feu',
            'classe_id'=>'2',
            'icone'=>'spe_feu.png'
        ]);
        Specialisation::create([
            'nom'=>'Arcane',
            'classe_id'=>'2',
            'icone'=>'spe_arcane.png'
        ]);

        Specialisation::create([
            'nom'=>'Ombre',
            'classe_id'=>'3',
            'icone'=>'spe_ombre.png'
        ]);
        Specialisation::create([
            'nom'=>'Sacré',
            'classe_id'=>'3',
            'icone'=>'spe_sacre.png'
        ]);
        Specialisation::create([
            'nom'=>'Discipline',
            'classe_id'=>'3',
            'icone'=>'spe_discipline.png'
        ]);

        Specialisation::create([
            'nom'=>'Précision',
            'classe_id'=>'4',
            'icone'=>'spe_precision.png'
        ]);
        Specialisation::create([
            'nom'=>'Maîtrise des Bêtes',
            'classe_id'=>'4',
            'icone'=>'spe_maitrise_des_betes.png'
        ]);
        Specialisation::create([
            'nom'=>'Survie',
            'classe_id'=>'4',
            'icone'=>'spe_survie.png'
        ]);
    }
}
