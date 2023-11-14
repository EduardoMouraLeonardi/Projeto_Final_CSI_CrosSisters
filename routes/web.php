<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoProdutoController;
use App\Http\Controllers\CupomController;
use App\Http\Controllers\CarrinhoController;




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
})->name('raiz');

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

    //Route::get('/listaDeProdutos', [ProdutoController::class, 'listaDeProdutos']);

    //Route::get('/contato', [HomeController::class, 'contato']);


    // EMAIL

    Route::get('/email', [EmailController::class, 'index'])->name('email.index');

    Route::get('/email/create', [EmailController::class, 'create']);
    //Route::post('/email/create', [EmailController::class, 'store']);

    Route::get('/email/{id}', [EmailController::class, 'show']);

    Route::delete('/email/{id}/', [EmailController::class, 'destroy']);


    // PEDIDO

    Route::get('/pedido', [PedidoController::class, 'index'])->name('pedido.index');

    Route::get('/pedido/create', [PedidoController::class, 'create']);
    Route::post('/pedido/create', [PedidoController::class, 'store']);

    Route::get('/pedido/{id}', [PedidoController::class, 'show']);

    Route::get('/pedido/{id}/edit', [PedidoController::class, 'edit']);
    Route::put('/pedido/{id}', [PedidoController::class, 'update']);

    Route::delete('/pedido/{id}', [PedidoController::class, 'destroy']);


    // CUPOM

    Route::get('/cupom', [CategoriaController::class,'index'])->name('cupom.index');

    Route::get('/cupom/create', [CategoriaController::class, 'create']);
    Route::post('/cupom/create', [CategoriaController::class, 'store']);

    Route::get('/cupom/{id}', [CategoriaController::class, 'show']);

    Route::get('/cupom/{id}/edit', [CategoriaController::class, 'edit']);
    Route::put('/cupom/{id}', [CategoriaController::class, 'update']);

    Route::delete('/cupom/{id}/', [CategoriaController::class, 'destroy']);


    // CARRINHO

    Route::get('/carrinho', [CategoriaController::class,'index'])->name('carrinho.index');

    Route::get('/carrinho/create', [CategoriaController::class, 'create']);
    Route::post('/carrinho/create', [CategoriaController::class, 'store']);

    Route::get('/carrinho/{id}', [CategoriaController::class, 'show']);

    Route::get('/carrinho/{id}/edit', [CategoriaController::class, 'edit']);
    Route::put('/carrinho/{id}', [CategoriaController::class, 'update']);

    Route::delete('/carrinho/{id}/', [CategoriaController::class, 'destroy']);



});

    Route::post('/email/create', [EmailController::class, 'store']);

    Route::get('/contato', [HomeController::class, 'contato'])->name('contato');

    Route::get('/listaDeProdutos', [ProdutoController::class, 'listaDeProdutos']);

    Route::get('/carrinho', [HomeController::class, 'carrinho'])->name('carrinho');


// HOME

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/admin/pages', [AdminController::class, 'pages'])->name('home');
Route::get('/admin/profile/', [AdminController::class, 'profile']);
Route::post('/admin/profile/', [AdminController::class, 'profile']);
