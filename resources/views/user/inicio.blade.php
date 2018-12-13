<!DOCTYPE html>

<html>
  {!! $page = 'home' !!}
  @include('includes.head')
<!-- 
  @if(Session::get('login') != 'OK')
    <script type="text/javascript">
        {{ Session::put('error', "Você precisa entrar no sistema primeiro!") }}
        window.location = "{{ route('login') }}";//here double curly bracket
    </script>
  @endif -->
  
  <div class='recuo'></div>
  <body>

      @include('includes.header') 
      @yield('header')
      
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
          <div class="row" style="padding: 10px">
              <div class="col-12">
                   <h2>Programação</h2>
              </div>
          </div>
          @include('includes.table_pedidos_all')  

          @include('includes.model')

      </div>

  </body>
</html>
