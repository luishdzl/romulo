<?php

// database/factories/PostFactory.php
namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $name = $this->faker->unique()->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->paragraph,
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'amount' => $this->faker->numberBetween(1, 100),
            'use' => $this->faker->randomElement([1, 2]),
            'status' => $this->faker->randomElement([1, 2]),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
