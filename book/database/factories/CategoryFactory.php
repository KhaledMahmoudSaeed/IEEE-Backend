<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected static $index = 0;
    protected static $categories = ['Fantasy', 'Science Fiction', 'Romance', 'Thriller', 'Mystery', 'Horror', 'Adventure'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = self::$categories[self::$index];

        // Increment index for next category and reset when reaching the end of the array
        self::$index = (self::$index + 1) % count(self::$categories);

        return [
            'title' => $category,
        ];
    }
}
