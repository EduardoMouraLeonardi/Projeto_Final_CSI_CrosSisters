@extends('adminlte::page')

@section('content')
<div class="container ">

    <h1>Perfil</h1>
    <br>
    <div calss="row">
    <div class="col">
    <div class="container p-5 my-5 border">
    <img src="foto_perfil" alt="Foto de Perfil do Usuario"><br>
    <input type="file" name="foto">
    </div>
    </div>

    <div class="col">
    <div class="container p-5 my-5 border ">
    <form>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="{{ $user->name }}"><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"  value="{{ $user->email }}"><br>
        <input type="button" value="Trocar Senha">
    </form>
    </div>
    </div>
    </div>

</div>
@endsection