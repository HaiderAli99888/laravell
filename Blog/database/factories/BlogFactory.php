<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'avatar' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraphs(3, true),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}
