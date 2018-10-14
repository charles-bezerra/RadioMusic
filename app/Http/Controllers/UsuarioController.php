<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Pedidos;
use App\Usuarios;
use App\Musicas;
use Session;

class UsuarioController extends Controller
{     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("layouts.index");
    }
    
    public function login()
    {
        return view('layouts.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('layouts.cadastro');
    }


    public function home()
    {
        return view("layouts.home");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if($request->senha == $request->csenha){
              $user = DB::table('usuarios')->select('*')->where('matricula',$request->matricula)->get();

              if(count($user)>0){
                  Session::put('error', "Usuario ja existente");
                  return Redirect::to(route('usuario.create'));
              }
              else{
                  $novo = new Usuarios();
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
                  return Redirect::to(route('home'));
              }
           }else{
             Session::put('error', "Senhas não conferem");
             return Redirect::to(route('usuario.create'));
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('usuarios')->drop()->where('id',"=",$id);
        $this->exit();
        return Redirect::to(route('/'));
    }
    

    public function pedir_musica(Request $request)
    {
        $pedido = new Pedidos();

        $pedido->detalhes = $request->detalhes;
        $pedido->musica_id = intval($request->musica_id);
        $pedido->usuario_id = intval(Session::get('id'));
        $pedido->save();
        
        return Redirect::to(route('home'));
    }
    

    public function valid(Request $request){
          $login = DB::table('usuarios')->select('*')->where('email',"=",$request->email)->where('senha',"=",$request->senha)->get();
          if (count($login)>0) {
              Session::put('nome', $login[0]->nome);
              Session::put('login', "OK");
              Session::put('email', $login[0]->email);
              Session::put('id', $login[0]->id);
              Session::forget('error');
              return Redirect::to(route('home'));
          }else{
              Session::put('error', "Email ou senha não encontrado");
              return Redirect::to(route('login'));
          }
    }


    public function exit(){
        Session::forget('nome');
        Session::forget('email');
        Session::forget('login');
        Session::forget('error');
        return Redirect::to('/');
    }
}
