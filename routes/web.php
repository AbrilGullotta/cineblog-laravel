<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Editor\DashboardController as EditorDashboard;

// Rutas públicas
Route::get('/', [PublicacionController::class, 'index'])->name('inicio');
Route::get('/publicacion/{id}', [PublicacionController::class, 'show'])->name('publicacion.show');
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

// Rutas de autenticación (las genera Breeze)
require __DIR__.'/auth.php';

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/perfil', function () {
        return view('usuario.perfil');
    })->name('usuario.perfil');

    // Comentarios
    Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
    Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');

});

// Rutas para editor
Route::middleware(['auth', 'rol:editor'])->prefix('editor')->name('editor.')->group(function () {

    Route::get('/dashboard', [EditorDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('etiquetas', EtiquetaController::class);

});

// Rutas para admin
Route::middleware(['auth', 'rol:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('peliculas', PeliculaController::class);
    Route::resource('etiquetas', EtiquetaController::class);
Route::get('/configuracion', function() {
    $configuracion = \App\Models\Configuracion::first();
    return view('admin.configuracion', compact('configuracion'));
    Route::get('/usuarios', function() {
    $usuarios = \App\Models\User::with('rol')
        ->withCount('publicaciones')
        ->latest()
        ->paginate(15);
    return view('admin.usuarios', compact('usuarios'));
})->name('admin.usuarios');
})->name('admin.configuracion');

Route::put('/configuracion', function(\Illuminate\Http\Request $request) {
    $config = \App\Models\Configuracion::firstOrCreate([]);
    $config->update($request->only('nombre_blog', 'descripcion_blog', 'mail_contacto', 'logo', 'estado_blog'));
    return redirect()->route('admin.configuracion')->with('success', 'Configuración guardada.');
})->name('admin.configuracion.update');
Route::get('/editores', function() {
    $rolEditor = \App\Models\Rol::where('nombre', 'editor')->first();
    $editores = $rolEditor
        ? \App\Models\User::where('rol_id', $rolEditor->id)->withCount('publicaciones')->get()
        : collect();
    return view('admin.editores', compact('editores'));
})->name('admin.editores');

Route::put('/editores/{id}/quitar-rol', function($id) {
    $user = \App\Models\User::findOrFail($id);
    $rolUsuario = \App\Models\Rol::where('nombre', 'usuario')->first();
    $user->update(['rol_id' => $rolUsuario->id ?? null]);
    return redirect()->route('admin.editores')->with('success', 'Rol quitado correctamente.');
})->name('admin.editores.quitarRol');
Route::get('/reportes', function() {
    $totalUsuarios      = \App\Models\User::count();
    $totalPublicaciones = \App\Models\Publicacion::where('estado_publicacion', true)->count();
    $totalComentarios   = \App\Models\Comentario::count();
    $totalCategorias    = \App\Models\Categoria::count();
    $categorias         = \App\Models\Categoria::withCount('publicaciones')->get();
    $ultimasPublicaciones = \App\Models\Publicacion::with('user')->latest()->take(5)->get();

    return view('admin.reportes', compact(
        'totalUsuarios', 'totalPublicaciones', 'totalComentarios',
        'totalCategorias', 'categorias', 'ultimasPublicaciones'
    ));
})->name('admin.reportes');
});