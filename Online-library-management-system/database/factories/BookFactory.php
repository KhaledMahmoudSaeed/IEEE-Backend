<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->name(),
            'isbn' => fake()->unique()->randomNumber(3, true),
            'copies_available' => fake()->randomElement([1, 2, 3, 4]),
            'description' => fake()->paragraph()
        ];
    }
}
