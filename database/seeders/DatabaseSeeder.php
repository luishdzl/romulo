<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        Category::factory(8)->create();
        Tag::factory(2)->create();
        $this->call(PostSeeder::class);
    }
}

