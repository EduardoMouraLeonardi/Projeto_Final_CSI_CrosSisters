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

<form method="POST" action="{{ url('/categoria/' . $categoria->id) }}">
    @method('PUT')
    @csrf

  <label class="form-label" for="nome">Nome:</label><br>
  <input class="form-control" type="text" id="nome" name="nome" value="{{ $categoria->nome }}"><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection