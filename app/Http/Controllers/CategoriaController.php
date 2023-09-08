<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::get();
        return view('categoria.categoria_index', ['categoria' => $categoria]);
    }

    public function create()
    {
        return view('categoria.categoria_create');
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

        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('categoria.index')->with('status', 'Categoria criada com sucesso!');
    }

    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        //dd($produto);
        return view('categoria.categoria_show', ['categoria' => $categoria]);
    }

    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_edit', ['categoria' => $categoria]);
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = Categoria::find($id);
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('categoria.index')->with('status', 'Categoria alterada com sucesso!');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('status', 'Categoria excluída com sucesso!');
    }

}


