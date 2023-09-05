<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// CATEGORIA 

Route::get('/categoria', [CategoriaController::class,'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create']);
Route::post('/categoria/create', [CategoriaController::class, 'store']);

Route::get('/categoria/{id}', [CategoriaController::class, 'show']);

Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit']);
Route::put('/categoria/{id}', [CategoriaController::class, 'update']);

Route::delete('/categoria/{id}/', [CategoriaController::class, 'destroy']);
