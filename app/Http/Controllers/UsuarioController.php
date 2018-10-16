<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $count = Pedidos::count("*");

        $pedido = Pedidos::find($count);
        $musica = Pedidos::find($count)->musicas;
        $usuario = Pedidos::find($count)->usuarios;

        return view("layouts.index", [ 'pedido' => $pedido ,'musica' => $musica, 'usuario' => $usuario]);
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
        $users_pedidos = [];
        $musicas_pedidos = [];
        $count_pedidos = Pedidos::count("*");

        $musicas = Musicas::all(); 

        for($i = 1; $i <= $count_pedidos; $i++){
            array_push($users_pedidos, Pedidos::find($i)->usuarios);
            array_push($musicas_pedidos, Pedidos::find($i)->musicas);          
        }

        return view("layouts.home", ['users_pedidos' => $users_pedidos, 'musicas_pedidos' => $musicas_pedidos, 'count_pedidos' => $count_pedidos, 'musicas' => $musicas]);
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
              Session::put('id', $login[0]->id);
              Session::put('nome', $login[0]->nome);
              Session::put('login', "OK");
              Session::put('email', $login[0]->email);
              Session::forget('error');
              return Redirect::to( route('home') );
          }else{
              Session::put('error', "Email ou senha não encontrado");
              return Redirect::to( route('login') );
          }
    }

    public function move_musica(Request $request){
          

          $file_img = $request->file('arquivo_img_album');
          $file_musica = $request->file('arquivo_musica');

          $file_name_img = 'Album-' . time() . '.' . $file_img->getClientOriginalExtension();
          $file_name_musica = 'Musica-' . time() . '.' .$file_musica->getClientOriginalExtension();

          $location = public_path('albuns/' . $file_name_img);
          $location1 = public_path('audios/' . $file_name_musica);

          $file_img->move($location,$file_name_img);
          $file_musica->move($location1,$file_name_musica);

          
          $time = date('Y-m-d');

          $musica = new Musicas();

          $musica->nome = $request->nome;
          $musica->banda = $request->banda;
          $musica->album = $request->album;
          $musica->cantor = $request->cantor;
          $musica->id_arquivo_musica = $location1;
          $musica->id_arquivo_img = $location;
          $musica->created_at = $time;
          $musica->updated_at = $time;
          $musica->save();

          Session::put('alert', 'OK');
          return Redirect::to( route('cadastroMusica') );
    }
    public function exit(){
          Session::forget('nome');
          Session::forget('email');
          Session::forget('login');
          Session::forget('error');
          return Redirect::to('/');
    }
}
