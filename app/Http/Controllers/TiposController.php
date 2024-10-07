<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class TiposController extends Controller
{
    public function tipos(){
        $tags = Tag::all();
        $posts = Post::all();
        return view('tipos', compact('tags', 'posts'));
       }
}



