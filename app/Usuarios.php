<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedidos;

class Usuarios extends Model
{
    public function pedidos(){
    	return $this->hasMany(Pedidos::class, 'usuario_id');
    }
}
