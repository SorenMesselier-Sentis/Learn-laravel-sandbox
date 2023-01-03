<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name" => fake()->firstName(1, true),
            "last_name" => fake()->lastName(1, true),
            "picture_url" => fake()->sentences(2, true),
            "description" => fake()->sentences(3, true),
        ];
    }
}
