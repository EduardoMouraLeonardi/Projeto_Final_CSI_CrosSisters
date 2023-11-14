<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carrinho;


class CarrinhoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        return view('carrinho.index', compact('pedidos'));
    }
}
