<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Publicacion;
use App\Models\Comentario;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $misPublicaciones = Publicacion::where('user_id', Auth::id())->count();
        $misComentarios   = Comentario::where('user_id', Auth::id())->count();
        $totalCategorias  = Categoria::count();
        $ultimasPublicaciones = Publicacion::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('editor.dashboard', compact(
            'misPublicaciones',
            'misComentarios',
            'totalCategorias',
            'ultimasPublicaciones'
        ));
    }
}