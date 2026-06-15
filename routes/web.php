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
Route::middleware(['auth'])->prefix('editor')->name('editor.')->group(function () {

    Route::get('/dashboard', [EditorDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('etiquetas', EtiquetaController::class);

});

// Rutas para admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::resource('publicaciones', PublicacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('peliculas', PeliculaController::class);
    Route::resource('etiquetas', EtiquetaController::class);

});