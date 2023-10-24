@extends('adminlte::page')

@section('content')
<div class="container">
    
<h1>Pedido</h1><br>

<strong>Número: </strong> {{ $pedido->numero }}<br>
<strong>Status: </strong> {{ $pedido->status }}<br>
<strong>Produtos: </strong> {{ $pedido->produto->nome }}<br>
<strong>Criação: </strong> {{ $pedido->created_at }}<br>

</div>
@endsection
