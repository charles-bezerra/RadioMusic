{!! $page = 'cadastroMusica' !!}
@include('includes.head')
@include('includes.header')

@yield('header')

@if( !empty(Session::get('alert')) && Session::get('alert') == 'OK' )
	<script type="text/javascript">
		alert('Casdastro feito com sucesso!');
	</script>
	{!! Session::put('alert', '') !!}
@endif

<div class='recuo'></div>
<body class="background-newMusic">
	<div class="container" style="margin-top: 60px">
		<form method="post" enctype="multipart/form-data" action="{{ route('musica.store') }}">
			  {{ csrf_field() }}
			  <h3>Coloque sua música em nosso site</h3><br/>
			  <div class="row">
				  <div class="col-6">
					  <div class="form-group">
						    <label for="exampleInputEmail1">Nome</label>
						    <input type="text" class="form-control" required="required" placeholder="Nome da música" name="nome">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
				  </div>
				  <div class="col-6">
					  <div class="form-group">
						    <label for="exampleInputPassword1">Banda</label>
						    <input type="text" class="form-control" required="required" placeholder="Nome da banda resposável pela música" name="banda">
					  </div>
				  </div>
			  </div>
			  <div class="row">
			  	  <div class="col-6">
					  <div class="form-group">
						    <label>Álbum</label>
						    <input type="text" class="form-control" required="required" placeholder="Álbum a qual essa música pertence" name="album">
					  </div>
				  </div>
				  <div class="col-6">
					  <div class="form-group">
						    <label>Imagem do Álbum</label>
						    <input type="file" class="form-control-file" required="required" placeholder="Álbum a qual essa música pertence" name='arquivo_img_album'>
					  </div>
				  </div>

			  </div>
			  <div class="row">
			  	  <div class="col-12">
					  <div class="form-group">
						    <label>Artista</label>
						    <input type="text" class="form-control" required="required" placeholder="Nome do vocal da banda" name="cantor">
					  </div>
				  </div>
			  </div>

			  <div class="row">
				  <div class="col-12">
					  <div class="form-group">
						    <label for="exampleInputPassword1">Música</label>
						    <input type="file" class="form-control-file" required="required" name="arquivo_musica">
					  </div>
				  </div>
			  </div>
			  <center>
			  		<button type="submit" class="btn btn-success">Cadastrar música</button>
			  </center>
		</form>
	</div>
</body>