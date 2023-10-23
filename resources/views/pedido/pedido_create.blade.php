@extends('adminlte::page')

@section('content')
<div class="container">
    
<h2>Formulário de criação:</h2><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/pedido/create') }}">
    
    @csrf

  <label class="form-label" for="nome">Nome:</label><br>
  <input class="form-control" type="text" id="nome" name="nome"><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection