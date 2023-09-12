@extends('adminlte::page')

@section('content')
<div class="container">
    
<h2>Formulário de edição:</h2><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/email/' . $email->id) }}">
    @method('PUT')
    @csrf

  <label class="form-label" for="nome">Para:</label><br>
  <input class="form-control" type="email" id="para" name="para" value="{{ $email->para }}"><br>

  <label class="form-label" for="assunto">Assunto:</label><br>
  <input class="form-control" type="text" id="assunto" name="assunto" value="{{ $email->assunto }}"><br>

  <label class="form-label" for="conteudo">Conteúdo:</label><br>
  <textarea class="form-control" type="text" id="conteudo" name="conteudo" value="{{ $email->conteudo }}"></textarea><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection