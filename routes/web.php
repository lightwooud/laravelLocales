<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Locales

Route::get('/locales', [App\Http\Controllers\LocalController::class, 'index']);

Route::get('/locales/create', [App\Http\Controllers\LocalController::class, 'create']);
Route::get('/locales/{local}/edit', [App\Http\Controllers\LocalController::class, 'edit']);
Route::post('/locales', [App\Http\Controllers\LocalController::class, 'sendData']);
Route::put('/locales/{local}', [App\Http\Controllers\LocalController::class, 'update']);
Route::delete('/locales/{local}', [App\Http\Controllers\LocalController::class, 'destroy']);

//Rutas Usuarios
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index']);
Route::get('/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'create']);
Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'sendData']);


//Rutas Categorias
Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index']);

Route::get('/categorias/create', [App\Http\Controllers\CategoriasController::class, 'create']);
Route::get('/categorias/{categoria}/edit', [App\Http\Controllers\CategoriasController::class, 'edit']);
Route::post('/categorias', [App\Http\Controllers\CategoriasController::class, 'sendData']);
Route::put('/categorias/{categoria}', [App\Http\Controllers\CategoriasController::class, 'update']);
Route::delete('/categorias/{categoria}', [App\Http\Controllers\CategoriasController::class, 'destroy']);

//Rutas Subcategorias
Route::get('/subcategorias', [App\Http\Controllers\SubcategoriasController::class, 'index']);

Route::get('/subcategorias/create', [App\Http\Controllers\SubcategoriasController::class, 'create']);
Route::get('/subcategorias/{subcategoria}/edit', [App\Http\Controllers\SubcategoriasController::class, 'edit']);
Route::post('/subcategorias', [App\Http\Controllers\SubcategoriasController::class, 'sendData']);
Route::put('/subcategorias/{subcategoria}', [App\Http\Controllers\SubcategoriasController::class, 'update']);
Route::delete('/subcategorias/{subcategoria}', [App\Http\Controllers\SubcategoriasController::class, 'destroy']);

//Rutas PDF
Route::get('/reportepdf', [App\Http\Controllers\ReporteController::class, 'generarPDF']);

