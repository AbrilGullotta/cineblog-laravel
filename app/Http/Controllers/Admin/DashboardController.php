<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicacion;
use App\Models\User;
use App\Models\Comentario;
use App\Models\Categoria;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPublicaciones = Publicacion::count();
        $totalUsuarios      = User::count();
        $totalComentarios   = Comentario::count();
        $totalCategorias    = Categoria::count();

        return view('admin.dashboard', compact(
            'totalPublicaciones',
            'totalUsuarios',
            'totalComentarios',
            'totalCategorias'
        ));
    }
}