<?php

namespace Database\Seeders;

use App\Models\Personnage;
use Illuminate\Database\Seeder;

class PersonnageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personnage::factory()->count(10)->create();
    }
}
