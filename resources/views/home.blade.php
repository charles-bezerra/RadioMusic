<!DOCTYPE html>

<html>
  @include('head')
  @if(Session::get('login') != 'OK')
    <script type="text/javascript">
        {{ Session::put('error', "Você precisa se cadastrar primeiro!") }}
        window.location = "{{ route('cadastro') }}";//here double curly bracket
    </script>
  @endif
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black">
        <a class="navbar-brand" href="{{ route('index') }}"><b>RadioMusic</b></a>
    </nav>
      <div class="container">
          @if(!empty(Session::get('nome')))<h3 align='center' style="padding-top: 30px">Olá {{ Session::get('nome') }}@endif</h3>
          <div class="row">
              <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 align='center'>Seus pedidos</h4>
                    </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 align='center'>Programação</h4>
                      </div>
                  </div>
              </div>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Fazer Pedido</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="{{ route('criar-pedido') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <label for="text">Nome da musica</label>
                              <input type="text" required='required' class="form-control" id="musica" placeholder="Nome da musica desejada" name="musica">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <label for="text">Nome cantor</label>
                              <input type="text" required='required' class="form-control" id="cantor" placeholder="Cantor correspondente" name="cantor">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <div class="row">
                <div  align='center' class="col-12">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Pedir música
                  </button>
                </div>
          </div><br/>
          <div class="row">
                <div align='center' class="col-12">
                      <a href="{{ route('sair') }}" class="btn btn-danger">Encerrar</a>
                </div>
          </div>
      </div>

  </body>
</html>
