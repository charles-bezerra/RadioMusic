<!DOCTYPE html>
<html lang="en">

	@include('includes.head')
	@if(!empty(Session::get('error'))){{ Session::put('error', '') }} @endif
	@if(!empty(Session::get('login')) && Session::get('login') == 'OK')
		<script type="text/javascript">
				window.location = "{{ route('home') }}";//here double curly bracket
		</script>
	@endif
  <body>

		@include('includes.header-index')

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
