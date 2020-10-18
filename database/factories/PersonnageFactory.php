<?php

namespace Database\Factories;

use App\Models\Personnage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personnage::class;

    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pseudo'=>$this->faker->name,
            'proprietaire'=>'Tom',
            'race_id'=>$this->faker->numberBetween(1,4),
            'classe_id'=>$this->faker->numberBetween(1,4),
            'specialisation_id'=>$this->faker->numberBetween(1,12),
        ];
    }
}
