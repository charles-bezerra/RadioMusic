<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model{

	public $fillable = [
		'nome','snome', 'senha', 'email', 'matricula', 'campus'
	];

	public $rules = [
		'nome' => 'required|min:3|max:20',
		'snome' => 'required|min:3|max:80',
		'senha' => 'required|min:8|max:100',
		'email' => 'required|min:12|max:100',
		'matricula' => 'required',
		'campus' => 'required'
	];

    public function pedidos(){
        return $this->hasMany(Pedidos::class, 'usuario_id');
    }
}
