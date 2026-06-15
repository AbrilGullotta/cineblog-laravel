<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    // Guardar nuevo comentario
    public function store(Request $request)
    {
        $request->validate([
            'contenido'       => 'required|max:500',
            'publicacion_id'  => 'required|exists:publicaciones,id',
        ]);

        Comentario::create([
            'contenido'        => $request->contenido,
            'publicacion_id'   => $request->publicacion_id,
            'user_id'          => Auth::id(),
            'fecha_comentario' => now(),
            'estado_comentario'=> true,
        ]);

        return redirect()->back()
            ->with('success', 'Comentario agregado correctamente.');
    }

    // Eliminar comentario
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return redirect()->back()
            ->with('success', 'Comentario eliminado correctamente.');
    }

    public function index() {}
    public function create() {}
    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
}