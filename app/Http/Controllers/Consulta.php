<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Pedido;
use Session;
class Consulta extends Controller
{
    public function pedir(Request $request){
        $pedido = new Pedido();
        $pedido->nome = $request->musica;
        $pedido->cantor = $request->cantor;
        $pedido->usuario_id = intval(Session::get('id'));
        $pedido->save();
        return Redirect::to('/');
    }
}
