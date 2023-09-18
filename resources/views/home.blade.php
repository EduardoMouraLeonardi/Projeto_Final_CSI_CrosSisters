@extends('adminlte::page')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CrosSisters') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sejam todos Bem-vindos!') }}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- grafico de pizza --}}

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Quantidade'],
            @foreach ($produtos as $produtos)
            ['{{ $produtos->nome}}',     {{ $produtos->quantidade }}],

            @endforeach
        ]);

        var options = {
          title: 'Meus Produtos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

{{-- colunas/cards --}}

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

<div id="piechart" style="width: 450px; height: 250px;"></div>


@endsection
