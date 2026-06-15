<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    // Listar todas las etiquetas
    public function index()
    {
        $etiquetas = Etiqueta::withCount('publicaciones')->get();
        return view('editor.etiquetas', compact('etiquetas'));
    }

    // Guardar nueva etiqueta
    public function store(Request $request)
    {
        $request->validate([
            'nombre_etiqueta' => 'required|max:100|unique:etiquetas',
        ]);

        Etiqueta::create($request->only('nombre_etiqueta'));

        return redirect()->route('editor.etiquetas.index')
            ->with('success', 'Etiqueta creada correctamente.');
    }

    // Actualizar etiqueta
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_etiqueta' => 'required|max:100|unique:etiquetas,nombre_etiqueta,' . $id,
        ]);

        $etiqueta = Etiqueta::findOrFail($id);
        $etiqueta->update($request->only('nombre_etiqueta'));

        return redirect()->route('editor.etiquetas.index')
            ->with('success', 'Etiqueta actualizada correctamente.');
    }

    // Eliminar etiqueta
    public function destroy($id)
    {
        $etiqueta = Etiqueta::findOrFail($id);
        $etiqueta->delete();

        return redirect()->route('editor.etiquetas.index')
            ->with('success', 'Etiqueta eliminada correctamente.');
    }

    public function create() { return redirect()->route('editor.etiquetas.index'); }
    public function edit($id) { return redirect()->route('editor.etiquetas.index'); }
    public function show($id) {}
}