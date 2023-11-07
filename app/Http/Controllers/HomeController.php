<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Email;
use App\Models\Contato;
use App\Models\Carrinho;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user = Auth::user();
        //dd($user);

        //if($user->perfil == 1){
        //    return redirect()-> route('raiz');
        //}

        $categoria_count = Categoria::count();
        $produtos_count = Produto::count();
        $email_count = Email::count();

        $categorias = Categoria::get();
        $produtos = Produto::get();

        return view('home', [
            'categoria_count'   => $categoria_count, 
            'produtos_count'    => $produtos_count, 
            'email_count'       => $email_count,
            'categorias'        => $categorias,
            'produtos'          => $produtos,
        ]);
    }

    public function contato(){
        return view ('contato.contato');
    }
    
    public function carrinho(){
        return view ('carrinho.carrinho');
    }
}
