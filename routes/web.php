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

// Rutas de autenticación
require __DIR__.'/auth.php';

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/perfil', function () {
        return view('usuario.perfil');
    })->name('usuario.perfil');

    Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
    Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');
    Route::get('/usuario/comentarios', function() {
    $comentarios = \App\Models\Comentario::where('user_id', Auth::id())
        ->with('publicacion')
        ->latest()
        ->get();
    return view('usuario.comentarios', compact('comentarios'));
})->name('usuario.comentarios');
Route::get('/usuario/favoritas', function() {
    $likes = \App\Models\LikePublicacion::where('user_id', Auth::id())
        ->with('publicacion.categoria')
        ->latest()
        ->get();
    return view('usuario.favoritas', compact('likes'));
})->name('usuario.favoritas');
Route::post('/publicacion/{id}/like', function($id) {
    $existe = \App\Models\LikePublicacion::where('user_id', Auth::id())
        ->where('publicacion_id', $id)
        ->first();

    if ($existe) {
        $existe->delete();
    } else {
        \App\Models\LikePublicacion::create([
            'user_id' => Auth::id(),
            'publicacion_id' => $id,
            'fecha_like' => now()
        ]);
    }

    return redirect()->back();
})->name('publicacion.like');
});

// Rutas para editor
Route::middleware(['auth', 'rol:editor'])->prefix('editor')->name('editor.')->group(function () {
    Route::get('/dashboard', [EditorDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('etiquetas', EtiquetaController::class);
    Route::get('/comentarios', function () {
        $comentarios = \App\Models\Comentario::with('user', 'publicacion')->latest()->paginate(15);
        return view('editor.comentarios', compact('comentarios'));
    })->name('comentarios');
});

// Rutas para admin
Route::middleware(['auth', 'rol:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('peliculas', PeliculaController::class);
    Route::resource('etiquetas', EtiquetaController::class);

    Route::get('/usuarios', function () {
        $usuarios = \App\Models\User::with('rol')->withCount('publicaciones')->latest()->paginate(15);
        return view('admin.usuarios', compact('usuarios'));
    })->name('usuarios');

    Route::get('/editores', function () {
        $rolEditor = \App\Models\Rol::where('nombre', 'editor')->first();
        $editores = $rolEditor
            ? \App\Models\User::where('rol_id', $rolEditor->id)->withCount('publicaciones')->get()
            : collect();
        return view('admin.editores', compact('editores'));
    })->name('editores');

    Route::put('/editores/{id}/quitar-rol', function ($id) {
        $user = \App\Models\User::findOrFail($id);
        $rolUsuario = \App\Models\Rol::where('nombre', 'usuario')->first();
        $user->update(['rol_id' => $rolUsuario->id ?? null]);
        return redirect()->route('admin.editores')->with('success', 'Rol quitado correctamente.');
    })->name('editores.quitarRol');

    Route::get('/configuracion', function () {
        $configuracion = \App\Models\Configuracion::first();
        return view('admin.configuracion', compact('configuracion'));
    })->name('configuracion');

    Route::put('/configuracion', function (\Illuminate\Http\Request $request) {
        $config = \App\Models\Configuracion::firstOrCreate([]);
        $config->update($request->only('nombre_blog', 'descripcion_blog', 'mail_contacto', 'logo', 'estado_blog'));
        return redirect()->route('admin.configuracion')->with('success', 'Configuración guardada.');
    })->name('configuracion.update');

    Route::get('/reportes', function () {
        $totalUsuarios        = \App\Models\User::count();
        $totalPublicaciones   = \App\Models\Publicacion::where('estado_publicacion', true)->count();
        $totalComentarios     = \App\Models\Comentario::count();
        $totalCategorias      = \App\Models\Categoria::count();
        $categorias           = \App\Models\Categoria::withCount('publicaciones')->get();
        $ultimasPublicaciones = \App\Models\Publicacion::with('user')->latest()->take(5)->get();
        return view('admin.reportes', compact(
            'totalUsuarios', 'totalPublicaciones', 'totalComentarios',
            'totalCategorias', 'categorias', 'ultimasPublicaciones'
        ));
    })->name('reportes');
});