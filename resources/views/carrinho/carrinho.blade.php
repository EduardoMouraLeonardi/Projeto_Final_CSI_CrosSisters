@extends('layouts.app')

@section('content')

  <body class="bg-light">
    
            <div class="row" >
            
        <div class="col-md-4 order-md-2 mb-4 wrapper style3">
        @empty($pedidos)
              <h2>Não há nenhum pedido no seu carrinho<h2>
            @endempty

          <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h3>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro item</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Inserir</button>
              </div>
            </div>
          </form>


            @if (isset($pedidos))       
              <h2>Não há nenhum pedido no seu carrinho<h2>
            @endif




</div>
        
        <div class="col-md-8 order-md-1" >
          <h3 class="mb-3">Endereço de cobrança</h3>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome" class="fw-normal">Nome</label>
                <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome" class="fw-normal">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="email" class="fw-normal">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="endereco" class="fw-normal">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

            <div class="row">
              
              <div class="col-md-4 mb-3">
                <label for="estado" class="fw-normal">Estado</label>
                <select class="custom-select d-block w-100" id="estado" required>
                  <option value="">Nenhum</option>
                  <option>Rio de Janeiro</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, insira um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cep" class="fw-normal">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="mesmo-endereco">
              <label class="form-check-label fw-normal" for="mesmo-endereco" >Endereço de entrega é o mesmo que o de cobrança.</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="salvar-info">
              <label class="form-check-label fw-normal" for="salvar-info">Lembrar desta informação, na próxima vez.</label>
            </div>
            <hr class="mb-4">


            <button class="btn btn-primary btn-lg btn-block" type="submit">Comprar</button>
          </form>
        </div>
      </div>

      
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

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
  </body>
</html>
@endsection