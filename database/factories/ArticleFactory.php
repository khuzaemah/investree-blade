<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'image' => fake()->imageUrl($width=400, $height=400),
            'user_id' => mt_rand(1, 11),
            'category_id' => mt_rand(1, 6),
        ];
    }
}
