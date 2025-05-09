@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Produto:</h1><br>

    <strong>Categoria: </strong>{{$produto->categoria->nome}}<br>
    <strong>Nome: </strong>{{$produto->nome}}<br>
    <strong>Quantidade: </strong>{{$produto->quantidade}}<br>
    <strong>Preço: </strong>{{$produto->preco}}<br>
    <strong>Criação: </strong>{{$produto->created_at}}<br>
    <strong>Atualização: </strong>{{$produto->updated_at}}<br>

    <img src="{{ url('storage/' . $produto->path) }}">

</div>
@endsection
