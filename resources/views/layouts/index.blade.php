<!DOCTYPE html>
<html lang="en">

	@include('includes.head')
	@if(!empty(Session::get('error'))){{ Session::put('error', '') }} @endif
	@if(!empty(Session::get('login')) && Session::get('login') == 'OK')
		<script type="text/javascript">
				window.location = "{{ route('home') }}";//here double curly bracket
		</script>
	@endif
	<div class="background"></div>
  <body>

		@include('includes.header-index')
		<div class="container">
				<div class="row">
						<div class="col-sm-8">
									<section>
						        <div class="row">
						          <div class="col-lg-8">
						            <h1 class="texto-largo">Venha fazer parte!</h1>
						            <p>
													 Faça pedidos de suas músicas favoritas para tocar em sua escola.
													 Deixe aqui sua playlist e cantores favoritos. Venha fazer parte
													 de nossa rádio!
												</p>
						          </div>
						        </div>

										<div class="row">
												<div class="col-12">
														<a href="{{ route('login') }}" class="btn btn-success">Entrar</a>
														<a href="{{ route('usuario.create') }}" class="btn btn-secondary">Cadastrar</a>
												</div>
										</div>
				    			</section>
						</div>

						<div class="col-sm-4">
							<section>
								<div class="card" id='shadow-1'  style="width: 18rem;">
										<img class="card-img-top" src="/img/music-img.jpg" alt="Card image cap">
										<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
										<ul class="list-group list-group-flush">
												<li class="list-group-item">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
										</ul>
										<div class="card-body" align='center'>
												<a href="#" class="card-link btn btn-success" style="padding-left:15px; padding-right:20px">
														<img width="22px" src='/icons/icon_play.png'/><b>Play</b>
												</a>
										</div>
								</div>
							</section>
						</div>

				</div>

		</div>

  </body>

</html>
