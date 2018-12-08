<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use DB;
use Redirect;
use App\Pedidos;
use App\User;
use App\Musicas;
use Session;


class UserController extends Controller
{   
    private $user;  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user){
        $this->user = $user;
    }
    public function index()
    {
        $count = Pedidos::count("*");
        $pedido = Pedidos::find($count);
        $musica = Pedidos::find($count)->musicas;
        $usuario = Pedidos::find($count)->usuarios;
        return view("user.index", [ 'pedido' => $pedido ,'musica' => $musica, 'usuario' => $usuario]);
    }
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('user.cadastro');
    }


    public function home()
    {
        $users_pedidos = [];
        $musicas_pedidos = [];
        $count_pedidos = Pedidos::count("*");

        $musicas = Musicas::all(); 
        $pedidos = Pedidos::all();

        for($i = 1; $i <= $count_pedidos; $i++){
            array_push($users_pedidos, Pedidos::find($i)->usuarios);
            array_push($musicas_pedidos, Pedidos::find($i)->musicas);          
        }

        return view("home", 
          ['users_pedidos' => $users_pedidos, 'musicas_pedidos' => $musicas_pedidos, 'count_pedidos' => $count_pedidos, 'musicas' => $musicas, 'pedidos' => $pedidos]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $this->validate($request, $this->user->rules);


          if($request->senha == $request->csenha){
              $user = DB::table('users')->select('*')->where('matricula',$request->matricula)->get();

              if(count($user)>0){
                  Session::put('error', "Usuario ja existente");
                  return Redirect::to(route('usuario.create'));
              }
              else{
                  $novo = new User();
                  $novo->nome = $request->nome . " " . $request->snome;
                  $novo->senha = $request->senha;
                  $novo->email = $request->email;
                  $novo->matricula = $request->matricula;
                  $novo->campus = $request->campus;
                  $novo->save();


                  if(!empty(Session::get('error'))){
                      Session::forget('error');
                  }
                  $query = DB::table('users')->select('id')->where('matricula',$request->matricula)->get();
                  Session::put('nome', $request->nome . " " . $request->snome);
                  Session::put('login', "OK");
                  Session::put('email', $request->email);
                  Session::put('id', $query[0]->id);
                  return Redirect::to(url('home'));
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
        DB::table('users')->drop()->where('id',"=",$id);
        $this->exit();
        return Redirect::to(route('/'));
    }
    
    

    public function valid(Request $request){
          $login = DB::table('users')->select('*')->where('email',"=",$request->email)->where('senha',"=",$request->senha)->get();
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

}
