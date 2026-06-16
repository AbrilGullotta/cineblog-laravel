<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
public function index()
{
    if (request()->is('editor/*')) {
        $publicaciones = Publicacion::where('user_id', Auth::id())
            ->with('categoria', 'user')
            ->latest()
            ->paginate(10);
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();
        $peliculas = Pelicula::all();
        return view('editor.posts', compact('publicaciones', 'categorias', 'etiquetas', 'peliculas'));
    }

    $publicaciones = Publicacion::where('estado_publicacion', true)
        ->with('categoria', 'user')
        ->latest()
        ->paginate(9);

    return view('index', compact('publicaciones'));
}
public function show($id)
{
    $publicacion = Publicacion::with('user', 'categoria', 'etiquetas', 'comentarios.user', 'pelicula')
        ->findOrFail($id);

    return view('post', compact('publicacion'));
}

    // Formulario para crear publicación (editor/admin)
    public function create()
    {
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();
        $peliculas = Pelicula::all();

        return view('editor.posts', compact('categorias', 'etiquetas', 'peliculas'));
    }

    // Guardar nueva publicación
    public function store(Request $request)
    {
        $request->validate([
            'titulo'           => 'required|max:255',
            'contenido'        => 'required',
            'categoria_id'     => 'required|exists:categorias,id',
            'tipo_publicacion' => 'required',
        ]);

        $publicacion = Publicacion::create([
            'titulo'            => $request->titulo,
            'resumen'           => $request->resumen,
            'contenido'         => $request->contenido,
            'categoria_id'      => $request->categoria_id,
            'pelicula_id'       => $request->pelicula_id,
            'tipo_publicacion'  => $request->tipo_publicacion,
            'estado_publicacion'=> $request->has('estado_publicacion'),
            'imagen_portada'    => $request->imagen_portada,
            'fecha_creacion'    => now(),
            'fecha_publicacion' => now(),
            'user_id'           => Auth::id(),
        ]);

        if ($request->etiquetas) {
            $publicacion->etiquetas()->sync($request->etiquetas);
        }

        return redirect()->route('editor.publicaciones.index')
            ->with('success', 'Publicación creada correctamente.');
    }

    // Formulario para editar
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();
        $peliculas = Pelicula::all();

        return view('editor.posts', compact('publicacion', 'categorias', 'etiquetas', 'peliculas'));
    }

    // Actualizar publicación
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'           => 'required|max:255',
            'contenido'        => 'required',
            'categoria_id'     => 'required|exists:categorias,id',
            'tipo_publicacion' => 'required',
        ]);

        $publicacion = Publicacion::findOrFail($id);

        $publicacion->update([
            'titulo'            => $request->titulo,
            'resumen'           => $request->resumen,
            'contenido'         => $request->contenido,
            'categoria_id'      => $request->categoria_id,
            'pelicula_id'       => $request->pelicula_id,
            'tipo_publicacion'  => $request->tipo_publicacion,
            'estado_publicacion'=> $request->has('estado_publicacion'),
            'imagen_portada'    => $request->imagen_portada,
        ]);

        $publicacion->etiquetas()->sync($request->etiquetas ?? []);

        return redirect()->route('editor.publicaciones.index')
            ->with('success', 'Publicación actualizada correctamente.');
    }

    // Eliminar publicación
    public function destroy($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->etiquetas()->detach();
        $publicacion->delete();

        return redirect()->route('editor.publicaciones.index')
            ->with('success', 'Publicación eliminada correctamente.');
    }
}