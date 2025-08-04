<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('Tidak ada user untuk membuat artikel. Jalankan UserSeeder terlebih dahulu.');
            return;
        }

        Article::factory(15)->make()->each(function ($article) use ($users) {
            $article->user_id = $users->random()->id;
            $article->save();
        });
    }
}