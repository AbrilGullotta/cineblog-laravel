<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Listar todas las categorías (admin/editor)
    public function index()
    {
        $categorias = Categoria::withCount('publicaciones')->get();
        return view('editor.categorias', compact('categorias'));
    }

    // Mostrar publicaciones de una categoría (público)
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        $publicaciones = $categoria->publicaciones()
            ->where('estado_publicacion', true)
            ->with('user')
            ->latest()
            ->paginate(9);

        return view('categorias', compact('categoria', 'publicaciones'));
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'nombre_categoria' => 'required|max:100|unique:categorias',
            'descripcion'      => 'nullable',
        ]);

        Categoria::create($request->only('nombre_categoria', 'descripcion'));

        return redirect()->route('editor.categorias.index')
            ->with('success', 'Categoría creada correctamente.');
    }

    // Actualizar categoría
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_categoria' => 'required|max:100|unique:categorias,nombre_categoria,' . $id,
            'descripcion'      => 'nullable',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->only('nombre_categoria', 'descripcion'));

        return redirect()->route('editor.categorias.index')
            ->with('success', 'Categoría actualizada correctamente.');
    }

    // Eliminar categoría
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('editor.categorias.index')
            ->with('success', 'Categoría eliminada correctamente.');
    }

    public function create() { return redirect()->route('editor.categorias.index'); }
    public function edit($id) { return redirect()->route('editor.categorias.index'); }
}