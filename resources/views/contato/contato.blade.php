@extends('layouts.app')

@section('content')

<!-- Contatos -->
<article id="contact" class="wrapper style4">
				<div class="container medium">
					<header>
						<h2>Bem-vindos ao site CrosSisters</h2>
					</header>
					<div class="row">
						<div class="col-12">
							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="name" placeholder="Nome" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>
									<div class="col-12">
										<input type="text" name="subject" id="subject" placeholder="Assunto" />
									</div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="Messagem"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Enviar Messagem" /></li>
											<li><input type="reset" value="Apagar Messagem" class="alt" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12">
							<hr />
							<h3>Nossas redes sociais:</h3>
							<ul class="social">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>
</div>
																	<!-- fim do contato-->

	<footer>
	<ul id="copyright">
		<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>
	</footer>
@endsection