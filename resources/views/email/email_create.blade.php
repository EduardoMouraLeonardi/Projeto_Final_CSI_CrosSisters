@extends('adminlte::page')

@section('content')
<div class="container">
    
<h2>Formulário de envio:</h2><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/email/create') }}">
    
    @csrf

  <label class="form-label" for="para">Para:</label><br>
  <input class="form-control" type="email" id="para" name="para"><br>

  <label class="form-label" for="assunto">Assunto:</label><br>
  <input class="form-control" type="text" id="assunto" name="assunto"><br>

  <label class="form-label" for="conteudo">Conteúdo:</label><br>
  <textarea class="form-control" type="text" id="conteudo" name="conteudo" rows="3"></textarea> <br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection