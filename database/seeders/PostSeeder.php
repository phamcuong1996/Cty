<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Post;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory()
            ->count(3)
            ->create();
    }
}