<?php

namespace Database\Factories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Company;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'price' => $this->faker->numberBetween(0, 1000),
            'enabled' => $this->faker->boolean,
        ];
    }
}
