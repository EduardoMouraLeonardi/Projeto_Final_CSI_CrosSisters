@extends('adminlte::page')

@section('content')
<div class="container">

<h1>Formulário de Criação</h1><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/produto/create') }}" enctype="multipart/form-data">

    @csrf
    
  <label  class="form-label" for="cars">Escolha uma categoria:</label>

  <select class="form-control" name="categoria_id" id="categoria_id">

@foreach ($categorias as $categoria)
    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
@endforeach

  </select>

    <label class="form-label" for="nome">Nome:</label><br>
    <input class="form-control" type="text" name="nome"><br>

    <label class="form-label" for="quantidade">Quantidade:</label><br>
    <input class="form-control" type="text" name="quantidade"><br>

    <label class="form-label" for="preco">Preço:</label><br>
    <input class="form-control" type="text" name="preco"><br>

    <label class="form-label" for="imagem">Adicionar Imagens:</label><br>
    <input  type="file" name="imagem"><br>
    <br> 
    <input type="submit" value="Criar">

</form>


</div>
@endsection