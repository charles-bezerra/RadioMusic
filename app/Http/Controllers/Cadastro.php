<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Usuario;
use Session;

use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function cadastrar(){
        return view('layouts.cadastro');
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
              $query = DB::table('usuarios')->select('id')->where('matricula',$request->matricula)->get();
              Session::put('nome', $request->nome . " " . $request->snome);
              Session::put('login', "OK");
              Session::put('email', $request->email);
              Session::put('id', $query[0]->id);
              return Redirect::to('home');
          }
       }else{
         Session::put('error', "Senhas não conferem");
         return Redirect::to('cadastro');
       }
    }
}
