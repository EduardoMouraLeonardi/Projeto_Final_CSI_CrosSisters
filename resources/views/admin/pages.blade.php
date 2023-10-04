@extends('adminlte::page')

@section('content')
<div class="container">

<h2>Paginas<h2><br>
<table class="table table-bordered table-hover">

  <tr class="table-active">
    <th>Pagina</th>
    <th>Ações</th>
  </tr>
  <tr>
    <td>Pagina Inicial</td>
    <td><a class="btn btn-primary" href="{{ url('/') }}">Visualizar</a></td>
  </tr>
  <tr>
    <td>Produtos</td>
    <td><a class="btn btn-primary" href="{{ url('/listaDeProdutos') }}">Visualizar</a></td>
  </tr>
  <tr>
    <td>Contatos</td>
    <td><a class="btn btn-primary" href="{{ url('/contato') }}">Visualizar</a></td>
  </tr>

</table>
</div>
@endsection