@section('user_name')
	<a id='user_name'>{{ Session::get('nome') }}</a>
@endsection

@section('form-header')
	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="">Ajuda</a>
		</li>
	</ul>
	<form class="form-inline my-2 my-lg-0" style="color: white">
		@yield('user_name')
		<a class="nav-link" href="{{ route('logout') }}" style="color:#FF6347">Sair</a>
	</form>
@endsection

@section('links-form')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
           <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#">Equipe</a>
        </li>
    </ul>
@endsection

@section('header')
 	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:black">
	  	  <a class="navbar-brand" href="{{ url('/') }}">
	    		<img class="img-fluid" width="25px" src='/icons/icon_player.png'/>
	    		<b>RadioMusic</b>
	  	  </a>	  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  		@if($page == 'home')
		  			@yield('form-header')
		  		@endif
		  		@if($page == 'index' || $page == 'login' || $page == 'cadastro' || $page == 'cadastroMusica')
		  			@yield('links-form')
		  		@endif
		  </div>
    </nav>
 @endsection


