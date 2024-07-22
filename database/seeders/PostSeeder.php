<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
      $posts = Post::factory()->count(50)->create();

        foreach ($posts as $post){
          $post->tags()->attach([
            rand(1,2),
          ]);
        }
  }
}
