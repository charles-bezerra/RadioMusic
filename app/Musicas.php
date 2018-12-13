<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedidos;

class Musicas extends Model
{
  	public function pedidos(){
    	return $this->hasMany(Pedidos::class, 'musica_id');
    }
}
