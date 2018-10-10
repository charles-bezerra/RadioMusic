<!DOCTYPE html>

<html>
  @include('includes.head')
  @if(Session::get('login') != 'OK')
    <script type="text/javascript">
        {{ Session::put('error', "Você precisa entrar no sistema primeiro!") }}
        window.location = "{{ route('login') }}";//here double curly bracket
    </script>
  @endif
  <body>
      @include('includes.header')
      <div class="container">
          <div style="margin-top: 40px"></div>
          <div class="row">
                <div  align='right' class="col-12">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                      Solicitar
                  </button>
                  <a href="{{ route('exit') }}" class="btn btn-danger">Encerrar</a>
                </div>
          </div>

          <hr/>
          <div class="row">
              <div class="col-md-5">
                  <h4>Seus pedidos</h4>
                  @include('includes.table_pedidos_user')
              </div>
              <div class="col-md-7">
                   <h4>Programação</h4>
                   @include('includes.table_pedidos_all')                 
              </div>
          </div>

          @include('includes.model')

      </div>

  </body>
</html>
