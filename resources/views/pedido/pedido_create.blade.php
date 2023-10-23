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

  <label class="form-label" for="nome">Número:</label><br>
  <input class="form-control" type="number" id="numero" name="numero"><br>

  <label class="form-label" for="nome">Status:</label><br>
  <input class="form-control" type="text" id="status" name="status"><br>

  <label class="form-label" for="nome">Produtos:</label><br>
  <input class="form-control" type="text" id="produtosVinc" name="produtosVinc"><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection