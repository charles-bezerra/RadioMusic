<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:black">
  <a class="navbar-brand" href="{{ route('usuario.index') }}">
    <img class="img-fluid" width="25px" src='/icons/icon_player.png'/>
    <b>RadioMusic</b>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav mr-auto">
	  	 <li class="nav-item">
	  	 	<a class="nav-link" href="">Ajuda</a>
	  	 </li>
	  </ul>
	  <form class="form-inline my-2 my-lg-0" style="color: white">
	  	 <a id='user_nome'>{{ Session::get('nome') }}</a>
	  	 <a class="nav-link" href="{{ route('exit') }}" style="color:#FF6347">Sair</a>
	  </form>
  </div>
</nav>
