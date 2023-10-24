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

<form method="POST" action="{{ url('/pedido/create') }}">
    
    @csrf

  <label class="form-label" for="nome">Número:</label><br>
  <input class="form-control" type="number" id="{{ $pedido->numero }}" name="numero"><br>

  <label  class="form-label" for="nome">Status de Pedido:</label><br>
  <select class="form-control" name="status" id="{{ $pedio->status }}"><br>

    <option value="1">Pedido realizado</option>
    <option value="2">Pagamento confirmado</option>
    <option value="3">Pedido enviado</option>
    <option value="4">Pedido entregue</option>

  </select><br>

  <label class="form-label" for="nome">Produtos Vinculados:</label><br>
  <select class="form-control" name="produto_id" id="{{ $pedido->nome }}">

  @foreach ($produtos as $produto)
    @if ($produto->id == $pedido->produto_id)
        <option value="{{$produto->id}}" selected>{{$produto->nome}}</option>
    @else
        <option value="{{$produto->id}}">{{$produto->nome}}</option>
    @endif
    
@endforeach

  </select>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection