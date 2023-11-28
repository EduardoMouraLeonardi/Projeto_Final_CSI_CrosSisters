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
      <img src="https://marketplace.canva.com/EAFRaJSn_KU/1/0/800w/canva-post-instagram-black-friday-desconto-moderno-simples-preto-e-amarelo-vpJVCYrAm-E.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>APROVEITE AS SUPER PROMOÇÕES DA NOSSA LOJA!!!</h5>
        <p>Vem para a CrosSisters, look novo e sempre linda.</p>
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

        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
                                <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS19nkhMcgWHRmqwBdkwTWFoDcUk5AJs8y96w&usqp=CAU" width="140" height="140">
            <h2>Calça Legging</h2>
            <p>As legging vai te surpreender de tão perfeita que veste. E ainda ela não escorrega, trazendo segurança e alta performance durante os treinos.Look novo e sempre linda.</p>
            <br>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7Vb1Ilcibte73KPY-xweVzaD34EK5WJY6AQ&usqp=CAU" alt="Generic placeholder image" width="140" height="140">
            <h2>Short</h2>
            <p>O Short de academia é uma das peças coringas para você montar o seu look. Sabemos o quanto é difícil combinar looks para academia e, por isso, temos peças de cores básicas para você criar várias combinações diferentes.</p>
            <br>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQizf2pgvlyLvEqoL4zyggSJe8tHDyN8CEK4jwbiYEts3pwn01h0wqCTWYCRkgYbxiQUp8&usqp=CAU" alt="Generic placeholder image" width="140" height="140">
            <h2>Short Saia</h2>
            <p>O Short Saia é um produto muito estiloso, ideal para quem não abre mão de versatilidade, o shorts é feito em suplex e uma saia também em suplex como sobreposição, deixa um caimento lindo no seu look completando seu visual trazendo feminilidade.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>



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
