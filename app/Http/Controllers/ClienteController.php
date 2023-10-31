<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function pages()
    {
        return view('welcome.blade');
    }

    public function profile()
    {
        $cliente = Auth::cliente();
        return view('cliente.profile', ['cliente'=> $cliente]);
    }
}