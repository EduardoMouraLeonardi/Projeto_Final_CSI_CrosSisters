<!DOCTYPE HTML>

<html>
	<head>
		<title>CrosSisters</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
        <link rel="shortout icon" href="{{ url('favicon.ico') }}">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
			<style>
				h1{
					text-align:center;
				}
				
			</style>
	</head>
	<body class="is-preload">

																		<!-- Navbar -->
													
	<nav id="nav">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="{{ url('/') }}">
		<img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/') }}">Welcome</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/listaDeProdutos') }}">Produtos</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/contato') }}">Contato</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Carrinho</a>
		<a class="py-2 d-none d-md-inline-block" href="{{ url('/login') }}"></i>Login</a>
      </div>
    </nav>

        
            <div class="container">
            @yield('content')
        </div>
																		<!-- fim do Navbar -->


                    <!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js') }}"></script>
			<script src="{{ url('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ url('assets/js/browser.min.js') }}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ url('assets/js/util.js') }}"></script>
			<script src="{{ url('assets/js/main.js') }}"></script>


							</ul>
							<hr />
						</div>
					</div>
					
				</div>
			</article>


    </body>
</html>