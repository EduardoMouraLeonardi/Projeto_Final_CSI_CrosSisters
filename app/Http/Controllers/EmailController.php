<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;

class EmailController extends Controller
{
    public function index()
    {
        $email = Email::get();
        return view('email.email_index', ['email' => $email]);
    }

    public function create()
    {
        return view('email.email_create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $origem_contato = Str::endsWith($request->headers->get('referer'), 'contato');

        //dd($origem_contato);

        $messages = [
            'nome.required' => 'O :attribute é obrigatório.',
            'email2.required' => 'O :attribute é obrigatório.',
            'conteudo.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required',
            'email2' => 'required',
            'conteudo' => 'required',
        ], $messages);

        $email = new Email();
        $email->nome = $request->nome;
        $email->email2 = $request->email2;
        $email->assunto = $request->assunto;
        $email->conteudo = $request->conteudo;
        $email->save();

        Mail::to($email->email2)->cco('pedrohenrriquefreitas135@gmail.com')->send(new SendMail($email));

        if($origem_contato){
            return redirect()->route('contato')->with('status', 'Email enviado com sucesso!');
        } else {
            return redirect()->route('email.index')->with('status', 'Email enviado com sucesso!');
        }

    }

    public function show(string $id)
    {
        $email = Email::find($id);
        //dd($produto);
        return view('email.email_show', ['email' => $email]);
    }

    public function destroy(string $id)
    {
        $email = Email::find($id);
        $email->delete();

        return redirect()->route('email.index')->with('status', 'Email excluído com sucesso!');
    }
}
