<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    public function post()
    {
       $posts = Post::where('status', 2)->get();
       return view('post', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function category(Category $category){
         $posts = Post::where('category_id', $category->id)
                      ->where('status', 2)
                      ->latest('id')
                      ->paginate(4);

        return view('posts.category', compact('posts', 'category'));      
    }
      
    public function tag(Tag $tag){
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(2);
        return view('posts.tag', compact('posts', 'tag'));
    }
}