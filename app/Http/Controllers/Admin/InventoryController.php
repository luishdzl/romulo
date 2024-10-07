<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;
use App\Models\Post;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('admin.inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $posts = Post::pluck('name', 'id');

        return view('admin.inventories.create', compact('categories', 'posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required|string|max:255',
            'category_name' => 'required|string|max:255',
            'numeric_value' => 'required|integer',
        ]);

        $inventory = Inventory::create($request->all());

        return redirect()->route('admin.inventories.index')->with('info', '¡Se creó con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view('admin.inventories.show', compact('inventories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        $categories = Category::pluck('name', 'id');
        $posts = Post::pluck('name', 'id');

        return view('admin.inventories.edit', compact('categories', 'posts', 'inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return redirect()->route('admin.inventories.index', $inventory)->with('info', '¡Se actualizó con éxito!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('admin.inventories.index')->with('info', '¡Se eliminó con éxito!');
    }
}
