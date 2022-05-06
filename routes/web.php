<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/agenda', [App\Http\Controllers\EventosController::class, 'index']);
Route::get('/agenda/mostrar', [App\Http\Controllers\EventosController::class, 'show']);
/* Post*/
Route::post('/agenda/editar/{id}', [App\Http\Controllers\EventosController::class, 'edit']);
Route::post("/agenda/criar", [App\Http\Controllers\EventosController::class, 'store']);
Route::post("/agenda/deletar/{id}", [App\Http\Controllers\EventosController::class, 'destroy']);
Route::post("/agenda/atualizar/{evento}", [App\Http\Controllers\EventosController::class, 'update']);
