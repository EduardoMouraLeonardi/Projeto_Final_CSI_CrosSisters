<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::get();
        return view('pedido.pedido_index', ['pedidos' => $pedidos]);
    }

    public function create()
    {
        $produtos = Produto::orderBy('nome','ASC')->get();
        return view('pedido.pedido_create', ['produtos'=> $produtos]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $messages = [
            'numero.required' => 'O número do pedido é obrigatório.',
            'status.required' => 'O :attribute é obrigatório.',
            'produto_id.required' => 'Os produtos vinculados ao pedido são obrigatórios.',
        ];

        $validated = $request->validate([
            'numero' => 'required',
            'status' => 'required',
            'produto_id' => 'required',
        ], $messages);

        $pedido = new Pedido();
        $pedido->numero = $request->numero;
        $pedido->status = $request->status;
        $pedido->produto_id = $request->produto_id;
        $pedido->save();

        return redirect()->route('pedido.index')->with('status', 'Pedido criado com sucesso!');
    }

    public function show(string $id)
    {
        $pedido = Pedido::find($id);
        //dd($produto);
        return view('pedido.pedido_show', ['pedido' => $pedido]);
    }

    public function edit(string $id)
    {
        $pedido = Pedido::find($id);
        $produtos = Produto::orderBy('nome','ASC')->get();
        return view('pedido.pedido_edit', ['pedido' => $pedido ,'produtos'=> $produtos]);
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'numero.required' => 'O número do pedido é obrigatório.',
            'status.required' => 'O :attribute é obrigatório.',
            'produto_id.required' => 'Os produtos vinculados ao pedido são obrigatórios.',
        ];

        $validated = $request->validate([
            'numero' => 'required',
            'status' => 'required',
            'produto_id' => 'required',
        ], $messages);

        $pedido = Pedido::find($id);
        $pedido->numero = $request->numero;
        $pedido->status = $request->status;
        $pedido->produto_id = $request->produto_id;
        $pedido->save();

        return redirect()->route('pedido.index')->with('status', 'Pedido alterado com sucesso!');
    }

    public function destroy(string $id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();

        return redirect()->route('pedido.index')->with('status', 'Pedido excluído com sucesso!');
    }
}
