<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/categorias', function () {
    return view('categorias');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/usuario/dashboard', function () {
    return view('usuario.dashboard');
});
Route::get('/usuario/perfil', function () {
    return view('usuario.perfil');
});
Route::get('/usuario/comentarios', function () {
    return view('usuario.comentarios');
});
Route::get('/editor/dashboard', function () {
    return view('editor.dashboard');
});
Route::get('/editor/posts', function () {
    return view('editor.posts');
});
Route::get('/editor/categorias', function () {
    return view('editor.categorias');
});
Route::get('/editor/etiquetas', function () {
    return view('editor.etiquetas');
});
Route::get('/editor/comentarios', function () {
    return view('editor.comentarios');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/usuarios', function () {
    return view('admin.usuarios');
});
Route::get('/admin/editores', function () {
    return view('admin.editores');
});
Route::get('/admin/posts', function () {
    return view('admin.posts');
});
Route::get('/admin/configuracion', function () {
    return view('admin.configuracion');
});
Route::get('/admin/reportes', function () {
    return view('admin.reportes');
});