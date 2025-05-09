@extends('layouts.app')
  
@section('content')
    

<br>
																		<!--carrossel-->

  <div class="container">
	<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://marketplace.canva.com/EAFRaJSn_KU/1/0/800w/canva-post-instagram-black-friday-desconto-moderno-simples-preto-e-amarelo-vpJVCYrAm-E.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>APROVEITE AS SUPER PROMOÇÕES DA NOSSA LOJA!!!</h5>
        <p>Vem para a CrosSisters, look novo e sempre linda.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://ae01.alicdn.com/kf/H96fd7be7309d4a52ab693f7924decae3R/Conjunto-de-academia-sem-costura-feminino-roupas-fitness-para-mulheres-manga-curta-top-crop-cintura-alta.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>VEM DE CONJUNTO!!!</h5>
        <p>Que tal um look novo para te motivar mais ainda a iniciar ou até mesmo continuar praticando atividade física hein???.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://marketplace.canva.com/EAFRaJSn_KU/1/0/800w/canva-post-instagram-black-friday-desconto-moderno-simples-preto-e-amarelo-vpJVCYrAm-E.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>APROVEITE AS SUPER PROMOÇÕES DA NOSSA LOJA!!!</h5>
        <p>Vem para a CrosSisters, look novo e sempre linda.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://ae01.alicdn.com/kf/H5b87d93a83f047d59fb9604258460598N/Conjunto-de-academia-sem-costura-feminino-roupas-fitness-para-mulheres-manga-curta-top-crop-cintura-alta.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>VEM DE CONJUNTO!!!</h5>
        <p>Quem ama aquele look com a modelagem impecável? Esse é perfeito para você!</p>
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
<br><br>
																<!-- fim do carrossel-->

        <h1> Promoção Black Friday!!! </h1>
        <br><br>
																<!-- Card -->
	<div class="container">
	<div class="row row-cols-1 row-cols-md-2 g-4" style="justify-content: center">

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://orbisfitness.com.br/wp-content/uploads/2023/01/LAF4180_Orbis.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <h5 class="card-title">Macaquinho Gray and White</h5>
        <p class="card-text">Este Macaquinho fitness é produzido com tecido microfibra e é otimo para malhar.</p>
        <br>
        <br>
        <a href="{{ url('/carrinho') }}" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://cdn.awsli.com.br/1049/1049693/produto/38773047/62e576fe08.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Conjunto White Fitness Short e Top Academia</h5>
        <p class="card-text">Este conjunto fitness é composto por uma calça e um top sem bojo, que são produzidos em tecido microfibra.</p>
        <a href="{{ url('/carrinho') }}" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://imgcentauro-a.akamaihd.net/1366x1366/M0N2Q402A1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Conjunto Fristyle Fitness Short e Top Academia</h5>
        <p class="card-text">Este conjunto fitness é composto por um short e um top sem bojo, que são produzidos em tecido microfibra.</p>
        <a href="{{ url('/carrinho') }}" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>

  <div class="col card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://imgs.extra.com.br/1559971127/1xg.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Conjunto Dark Blue Fitness Short e Top Academia</h5>
        <p class="card-text">Este conjunto fitness é composto por um short e um top sem bojo, que são produzidos em tecido microfibra.</p>
        <a href="{{ url('/carrinho') }}" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>
</div>
																<!-- fim do card-->
                                <br><br>
                               
<!-- CARD SEPARADO -->

<hr class="featurette-divider">

<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Supreendente, não?! <span class="text-muted"> Olha esse conjunto!!</span></h2>
            <p class="lead">Se ainda não escolheu o look perfeito pro seu dia, vem conferir esse conjuntinho lindo. Estilo que vai se destacar em qualquer lugar.Clica nesse link abaixo e confira todos os conjuntos que combine mais com você:</p>
            <a href="{{ url('/listaDeProdutos') }}">Mostrar mais</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="https://euamopromocao.myshopify.com/cdn/shop/products/product-image-1859094569_1024x1024@2x.jpg?v=1643310973" data-holder-rendered="true">
          </div>
        </div>

<hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Aêêê, mulherada! <span class="text-muted">Tá legal ou não tá?</span></h2>
            <p class="lead">Friozinho chegando e aí Sisters, já tem aquela peça chave para compor o look?.Clica nesse link abaixo e confira todos os conjuntos que combine mais com você:</p>
            <a href="{{ url('/listaDeProdutos') }}">Mostrar mais</a>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://tudodellashop.com.br/cdn/shop/products/H160c3281c0aa4116bc2779805220bf71C_600x.jpg?v=1687307891" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

<hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">E, por último, essa aqui. <span class="text-muted">Xeque-mate!</span></h2>
            <p class="lead">Um lindo conjunto de calça legging e um cropped totalmente combinando pra você arrasar na sua academia com esse look babado. Clica nesse link abaixo e confira todos os conjuntos que combine mais com você:</p>
            <a href="{{ url('/listaDeProdutos') }}">Mostrar mais</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://www.vennanci.com/cdn/shop/products/roupa-de-academia-feminina-conjunto-2022-699991_800x.jpg?v=1664481690" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>


<!-- FIM DO CARD SEPARADO -->
  <a class="btn-fixed" href="#topo">voltar ao inicio</a>

</div>
<br>

<footer class="my-5 pt-5 text-muted text-center text-small wrapper style3">
        <ul class="social"><br>
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/crossisters.rs/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://api.whatsapp.com/send/?phone=5551999982535&text&type=phone_number&app_absent=0" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a>
							</li>
							
	<ul id="copyright">
		<li>&copy; Endereço loja Física: Avenida Getúlio Vargas, 3663 Canoas/RS</li> <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>
      </footer>
      
@endsection
