<!DOCTYPE html>

<html>
  @include('includes.head')
  @if(Session::get('login') != 'OK')
    <script type="text/javascript">
        {{ Session::put('error', "Você precisa entrar no sistema primeiro!") }}
        window.location = "{{ route('login') }}";//here double curly bracket
    </script>
  @endif
  
  <div class='recuo'></div>
  <body>
      @include('includes.header-home')
      <div class="container">
          <div style="margin-top: 50px"></div>
          <div class="row">
                <div  align='right' class="col-12">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                      Solicitar
                  </button>
                </div>
          </div>

          <hr/>
          <div class="row">
              <div class="col-md-12">
                   <h4>Programação</h4>
                   @include('includes.table_pedidos_all')                 
              </div>
          </div>

          @include('includes.model')

      </div>

  </body>
</html>
