@extends('adminlte::page')

@section('content')
<div class="container">
    
<h1>Email</h1><br>

<strong>Nome: </strong> {{ $email->nome }}<br>
<strong>Email: </strong> {{ $email->email2 }}<br>
<strong>Assunto: </strong> {{ $email->assunto }}<br>
<strong>Conteúdo: </strong> {{ $email->conteudo }}<br>
<strong>Criação: </strong> {{ $email->created_at }}<br>

</div>
@endsection
