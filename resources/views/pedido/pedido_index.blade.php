@extends('adminlte::page')

@section('content')
<div class="container">

<h1>Pedidos</h1>

<a class="btn btn-primary" href="{{ url('/pedido/create') }}">Criar Pedido</a><br><br>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<script>
  function ConfirmDelete() {
    return confirm('Tem certeza que deseja excluir esse item?');
  }
</script>

<table class="table table-bordered table-hover">

  <tr class="table-active">
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
  </tr>

  @foreach ($pedido as $pedido)

  <tr>
    <td>{{ $pedido->id }}</td>
    <td>{{ $pedido->nome }}</td>
    <td>
        <a class="btn btn-info" href="{{ url('/pedido/' . $pedido->id) }}">Visualizar</a>
        
        <a class="btn btn-success" href="{{ url('/pedido/' . $pedido->id . '/edit') }}">Editar</a>

        <form method="POST" action="{{ url('/pedido/' . $pedido->id) }}" onsubmit = "return ConfirmDelete()">
          @method('DELETE')
          @csrf

          <input class="btn btn-danger" type="submit" value="Excluir">
        </form>
    
    </td>
  </tr>

  @endforeach

</table>

</div>
@endsection
