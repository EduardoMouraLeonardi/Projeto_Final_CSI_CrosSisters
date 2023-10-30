@extends('adminlte::page')

@section('content')
<div class="container">
    
<h1>Pedido</h1><br>

<strong>Número: </strong> {{ $pedido->numero }}<br>
<strong>Status: </strong> {{ $pedido->status }}<br>
<strong>Produtos:</strong> {{-- $pedido->produto->nome --}}

@foreach ($pedido->produtos as $item)
    <p>{{$item->id}}-{{$item->nome}}</p>
@endforeach

</div>
@endsection
