<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::get();
        return view('pedido.pedido_index', ['pedido' => $pedido]);
    }

    public function create()
    {
        return view('pedido.pedido_create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $messages = [
            'nome.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $pedido = new Pedido();
        $pedido->nome = $request->nome;
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
        return view('pedido.pedido_edit', ['pedido' => $pedido]);
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $pedido = Pedido::find($id);
        $pedido->pedido = $request->nome;
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
