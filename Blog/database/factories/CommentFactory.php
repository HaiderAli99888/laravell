<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;

    public function definition(): array
    {
        $postId = DB::table('blogs')->inRandomOrder()->value('id');
        $userId = DB::table('users')->inRandomOrder()->value('id');

        return [
            'blog_id' => $postId,
            'user_id' => $userId,
            'comment' => $this->faker->text(200)
        ];
    }
}
