@extends('layouts.app')
  
@section('content')
    <!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
                    
					<header>
						<h2>Lista de Produtos</h2>
					</header>

                    <div class="row">

                    @foreach ($produtos as $produto)

						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								
								@isset($produto->path)
								 	<a href="#" class="image featured"><img src="{{ url('/storage/' . $produto->path) }}" alt="" /></a>
								@endisset
								<h3><a href="#">{{ $produto ->nome }}</a></h3>
								<p>R$ {{ $produto->preco }}</p>
							</article>
						
							<button class="btn btn-light btn-block" type="submit">Comprar</button>

						</div>

                    @endforeach

					</div>
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
				</div>
			</article><br>
@endsection