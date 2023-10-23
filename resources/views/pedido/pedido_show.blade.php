@extends('adminlte::page')

@section('content')
<div class="container">
    
<h1>Pedido</h1><br>

<strong>Nome: </strong> {{ $pedido->nome }}<br>
<strong>Criação: </strong> {{ $pedido->created_at }}<br>

</div>
@endsection
