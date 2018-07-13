<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Usuario;

use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function cadastrar(){
        return view('cadastro');
    }

    public function registrar(Request $request){
       if($request->senha == $request->csenha){
          $user = DB::table('usuarios')->select('*')->where('matricula',$request->matricula)->get();

          if(count($user)>0){
            Session::put('error', "Usuario ja existente");
            return Redirect::to('cadastro');
          }
          else{
              $novo = new Usuario();
              $novo->nome = $request->nome . " " . $request->snome;
              $novo->senha = $request->senha;
              $novo->email = $request->email;
              $novo->matricula = $request->matricula;
              $novo->campus = $request->campus;

              $novo->save();

              if(!empty(Session::get('error'))){
                  Session::forget('error');
              }
              Session::put('nome', $login[0]->nome);
              Session::put('login', "OK");
              Session::put('email', $login[0]->email);
              Session::put('id', $login[0]->id);
              return Redirect::to('home');
          }
       }else{
         Session::put('error', "Senhas não conferem");
         return Redirect::to('cadastro');
       }
    }
}
