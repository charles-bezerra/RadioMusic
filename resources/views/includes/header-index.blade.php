<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-bottom" style="background-color:black">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img class="img-fluid" width="25px" src='/icons/icon_player.png'/>
        <b>RadioMusic</b></a>
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
