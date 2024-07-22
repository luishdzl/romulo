<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.navigation', compact('categories'));
    }
}
