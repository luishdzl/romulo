<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.herramientas.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.herramientas.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.herramientas.edit', $post)->with('info', '¡El post se creó con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $herramienta)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
    
        return view('admin.herramientas.edit', compact('herramienta', 'categories', 'tags'));
    }
    
    public function update(PostRequest $request, Post $herramienta)
    {
        $herramienta->update($request->all());



        return redirect()->route('admin.herramientas.edit', $herramienta)->with('info', '¡El post se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $herramienta)
    {
        $herramienta->delete();
        return redirect()->route('admin.herramientas.index')->with('info', '¡El post se eliminó con éxito!');
    }
}
