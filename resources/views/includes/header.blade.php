@section('user_name')
	 <li class="nav-item dropdown">
        	<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        		@if(isset(Auth::user()->name))
                	{{ Auth::user()->name }} <span class="caret"></span>
             	@endif
             </a>

             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
    </li>
@endsection

@section('form-header')
	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="">Ajuda</a>
		</li>
	</ul>
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
	  	  <a class="navbar-brand" href="#">
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


