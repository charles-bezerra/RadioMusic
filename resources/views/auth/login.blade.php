<!DOCTYPE html>
<html>

{!! $page = 'login' !!}
@include('includes.head')
<style>
        .caixa-de-entrada{
            margin-left: 27.5%;
            margin-top: 8%;
            width: 45%;
            height: 50%;
        }
        h3{
            padding-bottom: 20px;
        }
</style>

<div class='recuo'></div>
<body>
    @include('includes.header')
    @yield('header')
    <div class='container'>

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    <div class="caixa-de-entrada">
                                        
                        @csrf

                        <b><h3>Entre em sua conta</h3></b>
                        @if (isset($error))
                            <span class="invalid-feedback" style="color:red">
                                <strong>{{ $error }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com email" name='email'>
                            <small id="emailHelp" class="form-text text-muted">Nós não compartilharemos seu email com ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" required="required" id="exampleInputPassword1" placeholder="Sua senha" name='senha'>
                        </div>

                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a class="btn btn-success" href="{{ route('usuario.create') }}">Cadastrar</a>

                    </div>
            </form>

    </div>
</body>
</html>

