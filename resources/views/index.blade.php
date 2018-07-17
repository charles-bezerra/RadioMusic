<!DOCTYPE html>
<html lang="en">

	@include('head')
	@if(!empty(Session::get('error'))){{ Session::put('error', '') }} @endif
	@if(!empty(Session::get('login')) && Session::get('login') == 'OK')
		<script type="text/javascript">
				window.location = "{{ route('home') }}";//here double curly bracket
		</script>
	@endif
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom" style="background-color:black">
      <div class="container">
        <a class="navbar-brand" href="#"><b>RadioMusic</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('cadastro') }}">Cadastrar-se</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#">Equipe</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


		<img class="img-fluid" src="{{ asset('img/background.jpg') }}" height="100px" width="100px">

    <!-- Page Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="mt-5">Venha fazer parte!</h1>
            <p>Faça pedidos de suas músicas favoritas para tocar em sua escola. Deixe aqui sua playlist e cantores favoritos. Venha fazer parte de nossa rádio!</p>
          </div>
        </div>
      </div>
    </section>

		<section>
				<div class="container">
						<div class="row">
								<div class="col-12">
											<a href="{{ route('login') }}" class="btn btn-success">Entrar</a>
											<a href="{{ route('cadastro') }}" class="btn btn-secondary">Cadastrar</a>
								</div>
						</div>
				</div>
		</section>

  </body>

</html>
