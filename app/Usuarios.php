<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function pedidos(){
    	return $this->hasMany(Pedidos::class);
    }
}
