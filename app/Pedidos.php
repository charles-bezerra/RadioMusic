<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedidos;
use App\Usuarios;
use App\Musicas;

class Pedidos extends Model
{
    public function usuarios(){
    	return $this->belongsTo(User::class, 'usuario_id');
    }
    public function musicas(){
    	return $this->belongsTo(Musicas::class, 'musica_id');
    } 
}
