<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class Login extends Controller
{
    public function validar(Request $request){
          $login = DB::table('usuarios')->select('*')->where('email',"=",$request->email)->where('senha',"=",$request->senha)->get();
          if (count($login)>0) {
              Session::put('nome', $login[0]->nome);
              Session::put('login', "OK");
              Session::put('email', $login[0]->email);
              Session::put('id', $login[0]->id);
              Session::forget('error');
              return Redirect::to('home');
          }else{
              Session::put('error', "Email ou senha não encontrado");
              return Redirect::to('login');
          }
    }
    public function sair(){
        Session::forget('nome');
        Session::forget('email');
        Session::forget('login');
        Session::forget('error');
        return Redirect::to('/');
    }
    public function login(){
        return view('layouts/login');
    }
}
