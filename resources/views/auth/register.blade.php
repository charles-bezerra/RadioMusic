<!DOCTYPE html>
<html>
  {!! $page = 'cadastro' !!}

  @include('includes.head')
  @include('includes.header')
  
  @yield('header')

  <style>
    .caixa-entrada{
      width: 100%;
      margin-left: 0%;
    }
    h3{
        padding-bottom: 20px;
    }
    form{
       padding-top: 5%;
    }
  </style>

  <div class='recuo'></div>
  <body>
      <div class="container">
          <div class="caixa-entrada">
          <form action="{{ route('usuario.store') }}"  method="POST">
              {{ csrf_field() }}
              
              <h2 style="margin-bottom:20px">Faça seu cadastro</h2>

<!--               @if(!empty(Session::get('error')))
                @section('error-senha')
                  <div class="alert alert-danger">
                    {{ Session::get('error') }}
                  </div>
                @show
              @endif -->


              @if(isset($errors) && count($errors) > 0)
                  <div class="row">
                      <div class="col 12 alert alert-danger">
                          @foreach($errors->all() as $error)
                              <p>{{ $error }}</p>
                          @endforeach
                      </div>
                  </div>
              @endif

              <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                        <label for="Nome">Nome</label>
                        <input type="text" required='required' class="form-control" id="Nome" placeholder="Seu nome" name='name' value="{{old('name')}}">
                      </div>
                  </div>
                  <div class="col-9">
                      <div class="form-group">
                        <label for="Sobrenome">Sobrenome</label>
                        <input type="text" required='required' class="form-control" id="Sobrenome" placeholder="Seu sobrenome" name='sname' value="{{old('sname')}}">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" required='required' class="form-control" id="Email" placeholder="Seu email" name="email" value="{{old('email')}}">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <label for="Senha">Senha</label>
                        <input type="password" required='required' class="form-control" id="Email" placeholder="Uma senha" name='password'>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                        <label for="Confirmar-senha">Confirmar senha</label>
                        <input type="password" required='required' class="form-control" id="Email" placeholder="Confirme a senha que você digitou" name='csenha'>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-9">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Seu campus</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="campus" value="{{old('campus')}}">
                        <option>Apodi</option>
                        <option>CNAT</option>
                        <option>Caicó</option>
                        <option>Canguaretama</option>
                        <option>Ceará Mirim</option>
                        <option>Currais Novos</option>
                        <option>Macau</option>
                        <option>Mossoró</option>
                        <option>Ipanguaçu</option>
                        <option>Parelhas</option>
                        <option>Lajes</option>
                        <option>João Câmara</option>
                        <option>Parnamirim</option>
                        <option>Santa Cruz</option>
                        <option>São Gonsalo do Amarante</option>
                        <option>São Paulo do Potengi</option>
                        <option>Zona Norte</option>
                      </select>
                      <small class="form-text text-muted">Selecione o campus em qual você está cursando</small>
                    </div>
                  </div>
                  <div class="col-3"> 
                    <div class="form-group">
                      <label for="Matricula">Matricula</label>
                      <input type="text" required='required' class="form-control" id="Matricula" placeholder="Sua matricula" name='matricula' value="{{old('matricula')}}">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12" align='center'>
                      <div class="form-group">
                        <input type="submit" class="btn btn-secondary" required='required' class="form-control" id="Escola">
                      </div>
                  </div>
              </div>

          </form>
          </div>
      </div>
  </body>


</html>

