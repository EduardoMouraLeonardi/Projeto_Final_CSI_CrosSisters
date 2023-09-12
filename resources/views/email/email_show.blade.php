@extends('adminlte::page')

@section('content')
<div class="container">
    
<h1>Email</h1><br>

<strong>Para: </strong> {{ $email->para }}<br>
<strong>Assunto: </strong> {{ $email->assunto }}<br>
<strong>Conteúdo: </strong> {{ $email->conteudo }}<br>
<strong>Criação: </strong> {{ $email->created_at }}<br>

</div>
@endsection