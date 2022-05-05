<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'synopsis' => $this->faker->sentences(3, true),
            'cast' => $this->faker->name('male') . ", " . $this->faker->name('female'),
            'year' => $this->faker->numberBetween(1990,2022)
        ];
    }
}
