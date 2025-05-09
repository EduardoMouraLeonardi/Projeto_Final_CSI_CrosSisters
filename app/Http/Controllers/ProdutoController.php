<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::get();
        return view('produto.produto_index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$produto = Produto::get();
        $categorias = Categoria::orderBy('nome','ASC')->get();
        return view('produto.produto_create', ['categorias'=> $categorias]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->all());
        
        $messages = [
            'nome.required'         => 'O campo :attribute é OBRIGATORIO!',
            'quantidade.required'   => 'O campo :attribute é OBRIGATORIO!',
            'preco.required'        => 'O campo :attribute é OBRIGATORIO!',
            'categoria_id.required' => 'O campo :attribute é OBRIGATORIO!',
        ];
    
        $validated = $request->validate([
            'nome'          => 'required',
            'quantidade'    => 'required',
            'preco'         => 'required',
            'categoria_id'  => 'required',
        ], $messages);
    
        $produto = new Produto();
        $produto->nome          = $request->nome;
        $produto->quantidade    = $request->quantidade;
        $produto->preco         = $request->preco;
        $produto->categoria_id  = $request->categoria_id;

        if($request->hasFile('imagem')){
            //dd("teste");            
            $imageFileName = $request->file('imagem')->getClientOriginalName();

            $path = $request->file('imagem')->store('public/imagens');

            $produto-> filename = $imageFileName;
            $produto-> path = str_replace('public/', '', $path);
        }
        $produto->save();
    
        return redirect()-> route('produto.index')->with('status', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.produto_show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::orderBy('nome','ASC')->get();
        return view('produto.produto_edit', ['produto' => $produto  ,'categorias'=> $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O campo :attribute é OBRIGATORIO!',
            'quantidade.required' => 'O campo :attribute é OBRIGATORIO!',
            'preco.required' => 'O campo :attribute é OBRIGATORIO!',
            'categoria_id.required' => 'O campo :attribute é OBRIGATORIO!',
        ];

        $validated = $request->validate([
            'nome' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
            'categoria_id' => 'required',
        ], $messages);
    

        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria_id;
        $produto->save();

        return redirect()-> route('produto.index')->with('status', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto->delete(); 

        return redirect()-> route('produto.index')->with('status', 'Produto excluido com sucesso!');
    }

    public function listaDeProdutos()
    {
        $produtos = Produto::get();
        return view('produto.listaDeProdutos', ['produtos' => $produtos]);
    }

}
