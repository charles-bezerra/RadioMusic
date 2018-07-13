<!DOCTYPE html>
<html>

  @include('head')
  @include('header')
  <style>
    body{
      background-color: #F8F8FF;
    }
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
  <body>
      <div class="container">
          <div class="caixa-entrada">
          <form action="{{ route('registrar') }}"  method="POST">
              {{ csrf_field() }}
              <h3>Faça seu cadastro</h3>
              <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                        <label for="Nome">Nome</label>
                        <input type="text" required='required' class="form-control" id="Nome" placeholder="Seu nome" name='nome'>
                      </div>
                  </div>
                  <div class="col-9">
                      <div class="form-group">
                        <label for="Sobrenome">Sobrenome</label>
                        <input type="text" required='required' class="form-control" id="Sobrenome" placeholder="Seu sobrenome" name='snome'>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" required='required' class="form-control" id="Email" placeholder="Seu email" name="email">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <label for="Senha">Senha</label>
                        <input type="password" required='required' class="form-control" id="Email" placeholder="Uma senha" name='senha'>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                        <label for="Confirmar-senha">Confirmar senha</label>
                        <input type="password" required='required' class="form-control" id="Email" placeholder="Confirme a senha" name='csenha'>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-9">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Seu campus</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="campus">
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
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="Matricula">Matricula</label>
                      <input type="text" required='required' class="form-control" id="Matricula" placeholder="Sua matricula" name='matricula'>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <p align='center' style="color:red">@if(!empty(Session::get('error'))){{ Session::get('error') }} @endif</p>
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
