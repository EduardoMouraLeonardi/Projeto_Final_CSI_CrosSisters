<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


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

        $messages = [
            'para.required' => 'O :attribute é obrigatório.',
            'conteudo.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'para' => 'required',
            'assunto' => 'required',
        ], $messages);

        $email = new Email();
        $email->para = $request->para;
        $email->assunto = $request->assunto;
        $email->conteudo = $request->conteudo;
        $email->save();

        Mail::to($email->para)->send(new SendMail($email));

        return redirect()->route('email.index')->with('status', 'Email enviado com sucesso!');

    }

    public function show(string $id)
    {
        $email = Email::find($id);
        //dd($produto);
        return view('email.email_show', ['email' => $email]);
    }

    public function edit(string $id)
    {
        $email = Email::find($id);
        return view('email.email_edit', ['email' => $email]);
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'para.required' => 'O :attribute é obrigatório.',
            'conteudo.required' => 'O :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'para' => 'required',
            'assunto' => 'required',
        ], $messages);

        $email = Email::find($id);
        $email->para = $request->para;
        $email->assunto = $request->assunto;
        $email->conteudo = $request->conteudo;
        $email->save();

        return redirect()->route('email.index')->with('status', 'Email alterado com sucesso!');
    }

    public function destroy(string $id)
    {
        $email = Email::find($id);
        $email->delete();

        return redirect()->route('email.index')->with('status', 'Email excluído com sucesso!');
    }
}
