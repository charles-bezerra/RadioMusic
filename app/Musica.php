<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedidos;

class Musica extends Model
{
  	public function pedidos(){
    	return $this->hasMany(Pedido::class, 'musica_id');
    }
}