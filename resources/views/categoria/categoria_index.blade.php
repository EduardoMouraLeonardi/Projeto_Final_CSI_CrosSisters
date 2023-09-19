@extends('adminlte::page')

@section('content')
<div class="container">

<h1>Categoria</h1>

<a class="btn btn-primary" href="{{ url('/categoria/create') }}">Criar Categoria</a><br><br>

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

<table class="table table-striped table-hover">

  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
  </tr>

  @foreach ($categoria as $categoria)

  <tr>
    <td>{{ $categoria->id }}</td>
    <td>{{ $categoria->nome }}</td>
    <td>
        <a class="btn btn-info" href="{{ url('/categoria/' . $categoria->id) }}">Visualizar</a>
        
        <a class="btn btn-success" href="{{ url('/categoria/' . $categoria->id . '/edit') }}">Editar</a>

        <form method="POST" action="{{ url('/categoria/' . $categoria->id) }}" onsubmit = "return ConfirmDelete()">
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
