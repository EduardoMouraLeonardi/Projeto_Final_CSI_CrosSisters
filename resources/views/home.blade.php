@extends('adminlte::page')

@section('content')
<div class="container">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>{{ $categoria_count }}</h3>
<p> Categoria </p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="{{ url('/categoria') }}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>{{ $produtos_count }}</h3>
<p> Produto </p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="{{ url('/produto') }}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>{{ $email_count }}</h3>
<p>Email</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="{{ url('/email') }}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
