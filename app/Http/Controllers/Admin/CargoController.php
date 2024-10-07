<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('admin.cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $users = User::all();

        return view('admin.cargos.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'persona' => 'required|string|max:255',
            'taller' => 'required|string|max:255',
            'cedula' => 'required|integer',
            'cargo' => 'required|string|max:255',
        ]);

        $cargo = Cargo::create($request->all());

        return redirect()->route('admin.cargos.index')->with('info', '¡Se creó con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargos)
    {
        return view('admin.inventories.show', compact('cargos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        $categories = Category::pluck('name', 'id');
        $users = User::all();

        return view('admin.cargos.edit', compact('categories', 'users', 'cargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cargo $cargo)
    {
        $cargo->update($request->all());

        return redirect()->route('admin.cargos.index', $cargo)->with('info', '¡Se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        return redirect()->route('admin.cargos.index')->with('info', '¡Se eliminó con éxito!');
    }
}
