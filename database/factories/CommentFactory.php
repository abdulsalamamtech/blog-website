<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'user_id' => function(){
                return random_int(1, User::count());
            },
            'post_id' => function(){
                return random_int(1, Post::count());
            },
            'parent_comment_id' => function(){
                $comments = Comment::count();
                if($comments > 0){
                    return random_int(1, Comment::count());
                }
                return null;
            },
            'content' => fake()->text,
            'active' => fake()->boolean(true),
        ];
    }
}
