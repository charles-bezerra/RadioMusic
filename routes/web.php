<?php
use App\Pedidos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function (){
    $count = Pedidos::count("*");
    $pedido = Pedidos::find($count);
    $musica = Pedidos::find($count)->musicas;
    $usuario = Pedidos::find($count)->usuarios;
    return view('index' ,[ 'pedido' => $pedido ,'musica' => $musica, 'usuario' => $usuario]);
});

Route::resource("usuario", "UserController");
Route::resource("pedido", "PedidoController");
Route::resource("musica", "MusicaController");

Auth::routes();

Route::view('table', 'includes.table_pedidos_user')->name('table1');
Route::get('/home', 'HomeController@index')->name('home');