@extends('layouts.app')
  
@section('content')
    
    
																		<!--carrossel-->

                                                                        <div class="container">
	<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.uniflores.com.br/media/catalog/product/b/u/buqu_-garden-flores-do-campo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.uniflores.com.br/media/catalog/product/b/u/buqu_-garden-flores-do-campo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.uniflores.com.br/media/catalog/product/b/u/buqu_-garden-flores-do-campo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
																<!-- fim do carrossel-->

        <h1> Promoções!!! </h1>

																<!-- Card -->
	<div class="container">
	<div class="row row-cols-1 row-cols-md-2 g-4" style="justify-content: center">

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>
																<!-- fim do card-->



<!-- CARD SEPARADO -->


<div class="row">
  <div class="col-sm-6.5 mb-3 mb-sm-0" >
    <div class="card">
      <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
  <div class="col-sm-6.5">
    <div class="card">
      <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6.5 mb-3 mb-sm-0" >
    <div class="card">
      <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
  <div class="col-sm-6.5">
    <div class="card">
      <div class="card-body">
      <img src="https://piauihoje.com/uploads/imagens/images-6%7C1582726816.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</div>


<!-- FIM DO CARD SEPARADO -->

</div>
<br>



@endsection
