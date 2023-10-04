@extends('adminlte::page')

@section('content')
<div class="container">

<h1>Emails</h1>

<a class="btn btn-primary" href="{{ url('/email/create') }}">Enviar Email</a><br><br>

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
    <th>Email</th>
    <th>Assunto</th>
    <th>Conteúdo</th>
    <th>Ações</th>

  </tr>

  @foreach ($email as $email)

  <tr>
    <td>{{ $email->id }}</td>
    <td>{{ $email->nome }}</td>
    <td>{{ $email->email2 }}</td>
    <td>{{ $email->assunto }}</td>
    <td>{{ $email->conteudo }}</td>
    <td>
        <a class="btn btn-info" href="{{ url('/email/' . $email->id) }}">Visualizar</a>

        <form method="POST" action="{{ url('/email/' . $email->id) }}" onsubmit = "return ConfirmDelete()">
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
