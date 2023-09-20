@extends('adminlte::page')

@section('content')
<div class="container">

<h2>Produtos<h2>
@can('is_admin')
<a class="btn btn-success" href="{{url('/produto/create')}}">Criar</a><br>
@endcan

<script>
    function ConfirmDelete() {
    return confirm('Tem certeza que deseja excluir este registro?');
    }
</script>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<table class="table table-bordered table-hover">
  <tr>
    <th>Id</th>
    <th>Categoria</th>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Preço</th>
    <th>Ações</th>
  </tr>

@foreach ($produtos as $produto)
  <tr>
    <td>{{$produto->id}}</td>
    <td>{{$produto->categoria->nome}}</td>
    <td>{{$produto->nome}}</td>
    <td>{{$produto->quantidade}}</td>
    <td>{{$produto->preco}}</td>
    <td class="align-middle">
      <a class="btn btn-info" href="{{ url('/produto/' . $produto->id) }}">Visualizar</a>
      <a class="btn btn-primary" href="{{ url('/produto/' . $produto->id . '/edit') }}">Editar</a>
      <form method="POST" action="{{ url('/produto/' . $produto->id) }}" onsubmit = "return ConfirmDelete()">
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