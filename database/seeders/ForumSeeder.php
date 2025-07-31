<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class ForumSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        Post::factory(15)->make()->each(function ($post) use ($users) {
            $post->user_id = $users->random()->id;
            $post->save();

            // Buat beberapa komentar untuk setiap post
            Comment::factory(rand(2, 5))->make()->each(function ($comment) use ($post, $users) {
                $comment->post_id = $post->id;
                $comment->user_id = $users->random()->id;
                $comment->save();
            });
        });
    }
}
