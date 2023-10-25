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

<form method="POST" action="{{ url('/pedido/' . $pedido->id) }}">
    @method('PUT')
    @csrf

  <label class="form-label" for="nome">Número:</label><br>
  <input class="form-control" name="numero" type="number" id="{{ $pedido->numero }}"><br>

  <label  class="form-label" for="nome">Status de Pedido:</label><br>
  <select class="form-control" name="status" id="{{ $pedido->status }}"><br>

    <option value="Pedido realizado">Pedido realizado</option>
    <option value="Pagamento confirmado">Pagamento confirmado</option>
    <option value="Pedido enviado">Pedido enviado</option>
    <option value="Pedido entregue">Pedido entregue</option>

  </select><br>

<label class="form-label" for="nome">Produtos Vinculados:</label><br>
<select class="form-control" name="produto_id" id="produto_id">

@foreach ($produtos as $produto)
    @if ($produto->id == $pedido->produto_id)
        <option value="{{$produto->id}}" selected>{{$produto->nome}}</option>
    @else
        <option value="{{$produto->id}}">{{$produto->nome}}</option>
    @endif
    
@endforeach

</select><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection