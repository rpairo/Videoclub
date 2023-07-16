<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'year' => $this->faker->year,
            'director' => $this->faker->name,
            'poster' => $this->faker->imageUrl,
            'rented' => false,
            'synopsis' => $this->faker->paragraph,
        ];
    }
}
