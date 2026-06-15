<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    // Listar todas las películas (admin)
    public function index()
    {
        $peliculas = Pelicula::latest()->paginate(10);
        return view('admin.peliculas', compact('peliculas'));
    }

    // Guardar nueva película
    public function store(Request $request)
    {
        $request->validate([
            'titulo'        => 'required|max:100',
            'sinopsis'      => 'required',
            'director'      => 'required|max:100',
            'anio_estreno'  => 'required|integer|min:1900|max:2100',
            'duracion'      => 'required|integer',
            'pais'          => 'required|max:100',
            'imagen_portada'=> 'nullable|max:255',
        ]);

        Pelicula::create($request->only(
            'titulo', 'sinopsis', 'director',
            'anio_estreno', 'duracion', 'pais', 'imagen_portada'
        ));

        return redirect()->route('admin.peliculas.index')
            ->with('success', 'Película creada correctamente.');
    }

    // Actualizar película
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'        => 'required|max:100',
            'sinopsis'      => 'required',
            'director'      => 'required|max:100',
            'anio_estreno'  => 'required|integer|min:1900|max:2100',
            'duracion'      => 'required|integer',
            'pais'          => 'required|max:100',
            'imagen_portada'=> 'nullable|max:255',
        ]);

        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->only(
            'titulo', 'sinopsis', 'director',
            'anio_estreno', 'duracion', 'pais', 'imagen_portada'
        ));

        return redirect()->route('admin.peliculas.index')
            ->with('success', 'Película actualizada correctamente.');
    }

    // Eliminar película
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('admin.peliculas.index')
            ->with('success', 'Película eliminada correctamente.');
    }

    public function create() { return redirect()->route('admin.peliculas.index'); }
    public function edit($id) { return redirect()->route('admin.peliculas.index'); }
    public function show($id) {}
}