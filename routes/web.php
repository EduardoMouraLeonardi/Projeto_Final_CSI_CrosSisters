<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EmailController;

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

Route::middleware(['can:is_admin'])->group(function () {

    // CATEGORIA 

    Route::get('/categoria', [CategoriaController::class,'index'])->name('categoria.index');

    Route::get('/categoria/create', [CategoriaController::class, 'create']);
    Route::post('/categoria/create', [CategoriaController::class, 'store']);

    Route::get('/categoria/{id}', [CategoriaController::class, 'show']);

    Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit']);
    Route::put('/categoria/{id}', [CategoriaController::class, 'update']);

    Route::delete('/categoria/{id}/', [CategoriaController::class, 'destroy']);


    // PRODUTO

    Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

    Route::get('/produto/create', [ProdutoController::class, 'create']);
    Route::post('/produto/create', [ProdutoController::class, 'store']);

    Route::get('/produto/{id}', [ProdutoController::class, 'show']);

    Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit']);
    Route::put('/produto/{id}', [ProdutoController::class, 'update']);

    Route::delete('/produto/{id}', [ProdutoController::class, 'destroy']);

    Route::get('/listaDeProdutos', [ProdutoController::class, 'listaDeProdutos']);


    // EMAIL

    Route::get('/email', [EmailController::class, 'index'])->name('email.index');

    Route::get('/email/create', [EmailController::class, 'create']);
    Route::post('/email/create', [EmailController::class, 'store']);

    Route::get('/email/{id}', [EmailController::class, 'show']);

    Route::get('/email/{id}/edit', [EmailController::class, 'edit']);
    Route::put('/email/{id}', [EmailController::class, 'update']);

    Route::delete('/email/{id}/', [EmailController::class, 'destroy']);

});

// HOME

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

