<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiclesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = ['loué','accidenté','disponible'];
        return [
            'name'=> $this->faker->company,
            'price'=> $this->faker->numberBetween(1000,20000),
            'status'=> $this->faker->array_rand($array,1),
            'odometer'=> $this->faker->numberBetween(100,200000),
            'type'=> $this->faker->word,
        ];
    }
}
