<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostBookmark;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostBookmarkFactory extends Factory
{
    protected $model = PostBookmark::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'post_id' => Post::factory(),
            'user_id' => User::factory(),
        ];
    }
}
