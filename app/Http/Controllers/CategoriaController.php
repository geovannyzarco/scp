<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Muestra una lista de todas las categorías
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    // Muestra el formulario para crear una nueva categoría
    public function create()
    {
        return view('categorias.create');
    }

    // Almacena una nueva categoría en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'h_personales' => 'required|integer',
        ]);

        Categoria::create([
            'nombre' => $request->nombre,
            'h_personales' => $request->h_personales,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }

    // Muestra los detalles de una categoría específica
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    // Muestra el formulario de edición de una categoría
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    // Actualiza una categoría en la base de datos
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'h_personales' => 'required|integer',
        ]);

        $categoria->update([
            'nombre' => $request->nombre,
            'h_personales' => $request->h_personales,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    // Elimina una categoría de la base de datos
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
