<!DOCTYPE html>
<html lang="en">
    {!! $page = 'index' !!}
    @include('includes.head')
    
    @if(!empty(Session::get('error'))){{ Session::put('error', '') }} @endif
    
    @if( !empty(Session::get('alert')) && Session::get('alert') == 'OK' )
        {!! Session::put('alert', '') !!}
    @endif
    
    @if(!empty(Session::get('login')) && Session::get('login') == 'OK')
        <script type="text/javascript">
                window.location = "{{ route('home') }}";//here double curly bracket
        </script>
    @endif

  <div class='recuo'></div>
  <body class='background-index'>

        @include('includes.header')
        @yield('header')
        <div class="container" style="margin-top: 25px">
                <div class="row">
                        <div class="col-sm-8" style="margin-top: 10px;">
                            <section>
                                <div class="card shadow-1 animate-1">
                                    <div class="card-body" style="padding: 22px">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img class="card-img-left" width="100%" height="100%" src="/img/card1.png">
                                            </div>
                                            <div class="col-lg-7">  
                                                <h1 class="texto-largo">Sincronizar!</h1>
                                                <p>
                                                    Faça pedidos de suas músicas favoritas para tocar em sua escola.
                                                    Deixe aqui sua playlist e cantores favoritos. Venha fazer parte
                                                    de nossa rádio!
                                                </p>    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{ route('login') }}" class="btn btn-success">Entrar</a>
                                                        <a href="#" class="btn btn-secondary">Cadastrar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-1 animate-1" style="margin-top: 10px">
                                    <div class="card-body"  style="padding: 22px">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img class="card-img-left" width="100%" height="100%" src="/img/music-img.png" alt="Card image cap">
                                            </div>
                                            <div class="col-lg-7">
                                                <h1 class="texto-largo">Venha fazer parte!</h1>
                                                <p>
                                                    Promova suas músicas em novos institutos federais!
                                                    Coloque sua banda nesse novo mundo de muita música boa!
                                                </p>
                                                <a class="btn btn-success" href="#">Começar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-sm-4" style="margin-top: 10px;">
                            <section>
                                <div class="card shadow-1 animate-1"  style="width: 100%;">
                                        <img class="card-img-top" src="/img/music-img.jpg" alt="Card image cap">
                                        @if(isset($musica))
                                            <div class="card-body">
                                                    <h5 class="card-title">{{ $musica->nome }} - {{ $musica->cantor }}</h5>
                                                    <p>{{ $pedido->detalhes }}</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><b>Álbum: </b>{{ $musica->album }}</li>
                                                    <li class="list-group-item"><b>Pedido por: </b>{{ $usuario->nome }}</li>
                                            </ul>
                                            <div class="card-body" align='center'>
                                                    <a href="#" class="card-link btn btn-success" onclick="player( '{{ $musica->id_arquivo_musica }}' )" style="padding-left:15px; padding-right:20px">
                                                            <img width="22px" src='/icons/icon_play.png'/><b>Play</b>
                                                    </a>
                                            </div>
                                        @endif
                                </div>
                            </section>
                        </div>

                </div>
                @include('includes.player')

        </div>

  </body>

</html>
